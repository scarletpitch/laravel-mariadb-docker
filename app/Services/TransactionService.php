<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    /**
     * Get all transactions, optionally filtered by user.
     *
     * @param int|null $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllTransactions($userId = null)
    {
        $query = Transaction::query();

        // If userId is provided, filter transactions by user
        if ($userId) {
            $query->where('user_id', $userId);
        }

        return $query->orderBy('date', 'desc')->get();
    }

    /**
     * Get a single transaction by ID.
     *
     * @param int $id
     * @return Transaction
     */
    public function getTransactionById($id)
    {
        return Transaction::findOrFail($id);
    }

    /**
     * Get the total of all expenses.
     *
     * @param int|null $userId
     * @return float
     */
    public function getTotalExpenses($userId = null)
    {
        $query = Transaction::query()
                    ->where('category', 'expense');

        return $query->sum('amount');
    }

    /**
     * Get the total of all income.
     *
     * @param int|null $userId
     * @return float
     */
    public function getTotalIncome($userId = null)
    {
        $query = Transaction::query()
                    ->where('category', 'income');

        return $query->sum('amount');
    }

    public function getTotalSavings($userId = null)
    {
        $query = Transaction::query()
                    ->where('category', 'saving');

        return $query->sum('amount');
    }

    /**
     * Create a new transaction.
     *
     * @param array $data
     * @return Transaction
     */
    public function createTransaction(array $data)
    {
        return Transaction::create($data);
    }

    /**
     * Update an existing transaction.
     *
     * @param int $id
     * @param array $data
     * @return Transaction
     */
    public function updateTransaction($id, array $data)
    {
        $transaction = $this->getTransactionById($id);
        $transaction->update($data);

        return $transaction;
    }

    /**
     * Delete a transaction by ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function deleteTransaction($id)
    {
        $transaction = $this->getTransactionById($id);
        return $transaction->delete();
    }
}
