<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use Auth;
use Session;
use Storage;
use Image;
use PDF;

class ParticipantController extends Controller
{
    public function apply(){
      $user = Auth::user();
      if($user->status != null){
        return redirect()->route('participant.show', $user);
      }else if($user->status == 'SAVED'){
        return view('registrations.show')->withUser($user);
      }else if($user->status == 'UNPAID'){
        return redirect()->route('participant.billing');
      }else if($user->status == 'PAID'){
        return view('registrations.application')->withUser($user);
      }
      $categories = Category::all();
      return view('registrations.apply')->withCategories($categories);

    }




    public function store(Request $request, User $user){
      $this->validate($request,[
        'phone' => 'required|unique:users,phone',
        'gender' => 'required',
        'country' => 'required',
        'passportnumber' => 'nullable',
        'address' => 'required',
        'affiliation' => 'nullable',
        'code_no' => 'required',
        'participation_category' => 'required',
        'papertitle' => 'nullable',
        'remarks' => 'nullable'
      ]);
      $user->phone = $request->phone;
      $user->address = $request->address;
      $user->gender = $request->gender;
      $user->country = $request->country;
      $user->passport_number = $request->passportnumber;
      $user->affiliation = $request->affiliation;
      $user->category_id = Category::where('code_no', $request->code_no)->first()->id;
      $user->participation_category = $request->participation_category;
      $user->papertitle = $request->papertitle;
      $user->subscription = $request->subscription == 'on' ? true : false;
      $user->remarks = $request->remarks;
      if($request->hasFile('photo')){
        $file = $request->file('photo');
        $filename = strtolower(preg_replace('/\s+/','',trim($user->firstname))) .time() . '.' . $file->getClientOriginalExtension();
        $location = public_path('uploads/' . $filename);
        Image::make($file)->resize(300, 300)->save($location);
        $user->image_url = 'uploads/' . $filename;
      }
      if($request->hasFile('document_url')){
        $file = $request->file('document_url');
        $filename = strtolower(preg_replace('/\s+/','',trim($user->firstname))) .time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/'), $filename);
        $user->document_url = 'uploads/' . $filename;
      }
      $user->status = 'SAVED'; //Not yet confirmed. Application is still editable.
      $user->save();
      return redirect()->route('participant.show', $user);
    }




    public function show(User $user){
      if($user->status == 'SAVED'){
        return view('registrations.show')->withUser($user);
      }else if($user->status == 'UNPAID'){
        return redirect()->route('participant.billing');
      }else if($user->status == 'PAID'){
        return view('registrations.application')->withUser($user);
      }
      return redirect()->route('apply');
    }

    public function application(){
      $user = Auth::user();
      return view('registrations.application')->withUser($user);
    }

    public function edit(User $user){
      $categories = Category::all();
      if($user->status == 'SAVED'){
        return view('registrations.edit')->withUser($user)->withCategories($categories);
      }else{
        Session::flash('message', 'You are not allowed to modify further.');
        return redirect()->back();
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'phone' => 'required',
        'gender' => 'required',
        'country' => 'required',
        'passportnumber' => 'nullable',
        'address' => 'required',
        'affiliation' => 'nullable',
        'code_no' => 'required',
        'participation_category' => 'required',
        'papertitle' => 'nullable',
        'remarks' => 'nullable'
      ]);

      $user = Auth::user();
      $user->phone = $request->phone;
      $user->address = $request->address;
      $user->gender = $request->gender;
      $user->country = $request->country;
      $user->passport_number = $request->passportnumber;
      $user->affiliation = $request->affiliation;
      $user->category_id = Category::where('code_no', $request->code_no)->first()->id;
      $user->participation_category = $request->participation_category;
      $user->papertitle = $request->papertitle;
      $user->subscription = $request->subscription == 'on' ? true : false;
      $user->remarks = $request->remarks;
      if($request->hasFile('photo')){
        $file = $request->file('photo');
        $filename = strtolower(preg_replace('/\s+/','',trim($user->firstname))) .time() . '.' . $file->getClientOriginalExtension();
        $location = public_path('uploads/' . $filename);
        Image::make($file)->resize(300, 300)->save($location);
        $user->image_url = 'uploads/' . $filename;
      }
      if($request->hasFile('document_url')){
        $file = $request->file('document_url');
        $filename = strtolower(preg_replace('/\s+/','',trim($user->firstname))) .time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/'), $filename);
        $user->document_url = 'uploads/' . $filename;
      }
      $user->status = 'SAVED'; //Not yet confirmed. Application is still editable.
      $user->save();
      return redirect()->route('participant.show', $user);
    }




    public function confirm(Request $request){
      $user =  Auth::user();
      $user->status = 'UNPAID';
      $user->save();

      Session::flash('message', 'Your application has been successfully submitted!!');
      return redirect()->route('participant.billing');
    }

    public function billing(){
      $user = Auth::user();
      if($user->status == 'UNPAID'){
        return view('registrations.billing')->withUser($user);
      }else{
        Session::flash('message', 'Something wrong!!');
        return redirect()->back();
      }
    }


    //Generate Application PDF
    public function generatepdf($id) {
        $user = User::find($id);
        $pdf = PDF::loadView('pdf', compact('user'));
        return $pdf->download('application.pdf');
    }
}
