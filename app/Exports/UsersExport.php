<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            '#',
            'First Name',
            'Last Name',
            'Address',
            'Gender',
            'Email',
            'Phone',
            'Country',
            'Passsport',
            'Affiliation',
            'Type',
            'Paper',
            'Comments',
            'Status',
            'Paper',
            'Created',
            'Updated',
            'Category'
        ];
    }

    public function collection()
    {
        $users = User::where('status', 'UNPAID')->get();
        foreach($users as $key => $user){
          $user->cat = $user->category->name;
          // $user->amount = $user->payment->amount;
        }
        return $users;
    }
}
