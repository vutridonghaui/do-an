<?php

namespace App\Http\Controllers\Backend;

use App\Exports\ExportTransaction;
use App\Exports\ExportTransactionPeriod;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    public function getTransaction(){

        $transactions = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
            ->select(
                'transactions.id as transaction_id',
                'orders.id as order_id',
                'transactions.*',
                'orders.*',
                'transactions.amount as total_price'
            )
            ->orderBy('transactions.created_at', 'desc')
            ->paginate(30);
        return view('backend.transaction.transaction')->with('transactions', $transactions)->with('i', $i=1);
    }

    public function searchByDatetime(Request $request){

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $transactions = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
            ->select(
                'transactions.id as transaction_id',
                'transactions.*',
                'orders.*',
                'transactions.created_at as created_at'
            )
            ->where('transactions.created_at','>=', $startDate)
            ->where('transactions.created_at', '<=', $endDate)
            ->paginate(30);

        return view('backend.transaction.transaction')->with('transactions', $transactions)->with('i', $i=1);
    }

    public function getTopCustomer(){
        $orders = DB::table('transactions')
            ->groupBy('customer_id')
            ->sum('amount');
//            ->havingRaw('SUM(amount) > ?', [1000])
//            ->first();

//        dd($orders);


        return view('backend.transaction.top_customer');
    }


    public function exportAllTransaction(){
        return Excel::download(new ExportTransaction, 'transaction_all.xlsx');
    }

    public function exportTransactionPeriod(Request $request){
        return Excel::download(new ExportTransactionPeriod($request->start_date_excel, $request->end_date_excel), 'transaction_period.xlsx');
    }

    public function detailOrder($transactionId){
        $detailOrder = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
            ->select(
                'transactions.id as transaction_id',
                'orders.id as order_id',
                'transactions.*',
                'orders.*',
                'transactions.amount as total_price'

            )->where('transactions.id', $transactionId)
            ->get();

        return view('backend.transaction.detail_order')->with('detailOrder', $detailOrder);
    }


    public function exportDetailOrder($transactionId){

        $detailOrder = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
            ->select(
                'transactions.id as transaction_id',
                'orders.id as order_id',
                'transactions.*',
                'orders.*',
                'transactions.amount as total_price'

            )->where('transactions.id', $transactionId)
            ->get();

            $pdf = PDF::loadView('backend.transaction.pdf_detail_order',['detailOrder' => $detailOrder]);
            return $pdf->stream('DetailOrder.pdf');

    }

}
