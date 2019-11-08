<?php

namespace App\Exports;

use App\Payment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PaymentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array{
      return [
        '#',
        'Reference',
        'Amount',
        'Participant',
        'Phone',
        'Email',
        'Gateway Fee',
        'RequestID'
      ];
    }
    public function collection()
    {
        $payments = Payment::orderBy('id', 'desc')->get();
        return $payments;
    }
}
