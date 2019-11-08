<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = User::where('status', 'UNPAID')->exclude(['image_url', 'regno', 'address', 'subscription'])->get();
        foreach($users as $key => $user){
          $user->cat = $user->category->name;
          // $user->amount = $user->payment->amount;
        }
        return $users;
    }
}
