@extends('layouts.app')

@section('content')
    <h1>Expense Tracker</h1>
    <nav>
        <ul>
            <button class="btn btn--confirm" onclick="window.location='{{ route('transactions.index') }}'">Transactions</button>
            <button class="btn btn--confirm" onclick="window.location='{{ route('transactions.create') }}'">Create Transaction</button>
        </ul>
    </nav>
    <h2>All Transactions</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Category</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ ucfirst($transaction->category) }}</td>
                    <td>{{ $transaction->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Summary</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Total Income:</th>
                <th>Total Savings:</th>
                <th>Total Expenses:</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $totalIncome }}</td>
                    <td>{{ $totalSavings }}</td>
                    <td>{{ $totalExpenses }}</td>
                </tr>
        </tbody>
    </table>
@endsection
