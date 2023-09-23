<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Order;

class ReportController extends Controller
{
    /**
     * Display a listing of order history
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $transactions = Transaction::all();

        // group transaction by month
        $transactionByMonth = $transactions->groupBy(function($transaction) {

            return $transaction->created_at->format('Y-m');
        });

        // calculate the sum of amount by month
        $monthlySums = $transactionByMonth->map(function($transaction) {

            return $transaction->sum('amount');
        });

        $approvedOrders = Order::where('status', 'approved')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();
        return view('components.admin.reports.index', compact('transactions', 'approvedOrders', 'cancelledOrders'));
    }
}
