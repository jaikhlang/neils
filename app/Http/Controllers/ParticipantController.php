<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use Auth;
use Session;
use Storage;
use Image;

class ParticipantController extends Controller
{
    public function apply(){
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
      $user->paper_title = $request->papertitle;
      $user->subscription = $request->subscription == 'on' ? true : false;
      $user->remarks = $request->remarks;
      // $user->status = 'SAVED';

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
        $path = $request->document_url->storeAs('uploads', $filename);
        $user->document_url = $path;
      }
      $user->save();
      return redirect()->route('participant.show', $user);
    }

    public function show(User $user){
      return view('registrations.show')->withUser($user);
    }

    public function edit(User $user){
      $categories = Category::all();
      return view('registrations.edit')->withUser($user)->withCategories($categories);
    }

    public function update(Request $request, User $user){
      $user->status = 'UNPAID';
      $user->save();
      return redirect()->route('participant.billing');
    }

    public function billing(){
      $user = Auth::user();
      return view('registrations.billing')->withUser($user);
    }
}
