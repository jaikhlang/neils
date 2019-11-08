<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
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
      $unpaid = $users->where('status', 'UNPAID')->count();
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
      $participants = User::where('status', 'PAID')->orderBy('id', 'desc')->paginate(200);
      return view('manages.participants')->withParticipants($participants);
    }

    //Registered but not PAID participants list.
    public function registered(){
      $participants = User::where('status','!=', 'PAID')->where('status','!=', null)->orderBy('id', 'desc')->paginate(200);
      return view('manages.registered')->withParticipants($participants);
    }

    //Payment Lists.
    public function payments(){
      $payments = Payment::orderBy('id', 'desc')->paginate(250);
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
}
