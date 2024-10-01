<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Fetch all transactions, ordered by date
        $transactions = Transaction::with('user')->orderBy('date', 'desc')->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        // Return the form to create a transaction
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        // Validate and store the transaction
        $data = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'category' => 'required|in:income,expense,saving',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
        ]);

        Transaction::create($data);
        return redirect()->route('transactions.index');
    }
}
