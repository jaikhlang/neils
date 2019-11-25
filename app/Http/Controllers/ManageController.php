<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\PaymentExport;
use Excel;
use App\User;
use App\Role;
use App\Category;
use App\Payment;
class ManageController extends Controller
{

    //Dashboard.
    public function index(){
      $users = Role::where('name', 'participant')->first()->users;
      // $unpaid = $users->where('status', 'UNPAID')->count();
      $unpaid = $users->where('status','!=', 'PAID')->where('status','!=', null)->count();
      $paid = $users->where('status', 'PAID')->count();
      $presenter = $users->where('status', 'PAID')->where('participation_category', 'presenter')->count();
      $participant = $users->where('status', 'PAID')->where('participation_category', 'nonpresenter')->count();
      $categories = Category::all();
      $payments = Payment::all();
      return view('manages.index')->withUnpaid($unpaid)->withPaid($paid)
                                  ->withPresenter($presenter)
                                  ->withParticipant($participant)
                                  ->withCategories($categories)
                                  ->withPayments($payments);
    }

    //Registered and PAID participants list.
    public function participants(){
      $participants = User::where('status', 'PAID')->orderBy('payment_id', 'desc')->get();
      return view('manages.participants')->withParticipants($participants);
    }

    //Registered but not PAID participants list.
    public function registered(){
      $participants = User::where('status','!=', 'PAID')->where('status','!=', null)->orderBy('id', 'desc')->get();
      return view('manages.registered')->withParticipants($participants);
    }

    //Payment Lists.
    public function payments(){
      $payments = Payment::orderBy('id', 'desc')->get();
      return view('manages.payments')->withPayments($payments);
    }

    //Show user.
    public function showUser($id){
      $user = User::find($id);
      return view('manages.view')->withUser($user);
    }

    //Delete any user.
    public function destroy($id){
      $user = User::find($id);
      $user->delete();
      return redirect()->route('manages.participants');
    }

    //Exports Users.
    public function export(){
      return Excel::download(new UsersExport, 'neils.xlsx');
    }

    //Exports Payment.
    public function exportPayment(){
      return Excel::download(new PaymentExport, 'neilspayments.xlsx');
    }

    //Edit User
    public function editUser($id){
      $user = User::find($id);
      $categories = Category::all();
      return view('manages.users.edit')->withCategories($categories)->withUser($user);
    }

    //Update User
    public function updateUser(Request $request, User $user){

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
      $user->firstname = $request->firstname;
      $user->lastname = $request->lastname;
      $user->phone = $request->phone;
      $user->gender = $request->gender;
      $user->country = $request->country;
      $user->passport_number = $request->passportnumber;
      $user->address = $request->address;
      $user->affiliation = $request->affiliation;
      $user->category_id = Category::where('code_no', $request->code_no)->first()->id;
      $user->participation_category = $request->participation_category;
      $user->papertitle = $request->papertitle;
      $user->subscription = $request->subscription == 'on' ? true : false;
      $user->remarks = $request->remarks;
      if($request->hasFile('document_url')){
        $file = $request->file('document_url');
        $filename = strtolower(preg_replace('/\s+/','',trim($user->firstname))) .time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/'), $filename);
        $user->document_url = 'uploads/' . $filename;
      }
      //Status requires no updates.
      $user->save();
      return redirect()->back();
    }
}
