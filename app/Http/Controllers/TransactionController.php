<?php

namespace App\Http\Controllers;

use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function index()
    {
        // Fetch all transactions
        $transactions = $this->transactionService->getAllTransactions();
        $totalIncome = $this->transactionService->getTotalIncome();
        $totalExpenses = $this->transactionService->getTotalExpenses();
        $totalSavings = $this->transactionService->getTotalSavings();

        return view('transactions.index', compact('transactions', 'totalIncome', 'totalExpenses', 'totalSavings'));
    }

    public function create()
    {
        // Render form for creating a transaction
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        // Validate and create the transaction
        $data = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'category' => 'required|in:income,expense,saving',
            'date' => 'required|date',
        ]);

        $this->transactionService->createTransaction($data);
        return redirect()->route('transactions.index');
    }

    public function edit($id)
    {
        // Fetch a transaction for editing
        $transaction = $this->transactionService->getTransactionById($id);
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the transaction
        $data = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'category' => 'required|in:income,expense,saving',
            'date' => 'required|date',
        ]);

        $this->transactionService->updateTransaction($id, $data);
        return redirect()->route('transactions.index');
    }

    public function destroy($id)
    {
        // Delete a transaction
        $this->transactionService->deleteTransaction($id);
        return redirect()->route('transactions.index');
    }
}
