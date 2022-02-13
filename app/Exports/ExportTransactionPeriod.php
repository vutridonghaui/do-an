<?php

namespace App\Exports;

use Guzzle\Http\Message\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportTransactionPeriod implements FromCollection, WithHeadings
{

    protected $startDate;
    protected $endDate;

    function __construct($startDate, $endDate) {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

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

            )->where('transactions.created_at' ,'>=', $this->startDate )
            ->where('transactions.created_at', '<=', $this->endDate)
            ->get();
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
