<?php

namespace App\Exports;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportTransaction implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $transactions = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
        ->select(
            'orders.transaction_id',
            'transactions.customer_id',
            'transactions.customer_name',
            'transactions.customer_email',
            'transactions.customer_phone',
            'orders.product_id',
            'orders.product_name',
            'orders.qty',
            'orders.amount as amount',
            'transactions.amount as total',
            'transactions.created_at',
            'orders.message'

        )->get();
//        dd($transactions);
        return $transactions;
    }

    public function headings(): array
    {
        return [
            'Transaction Id' ,
            'Customer Id',
            'Customer Name',
            'Customer Email',
            'Customer Phone',
            'Product Id',
            'Product Name',
            'Quantity',
            'Amount',
            'Total Amount',
            'Time Order',
            'Notification',
        ];
    }

}
