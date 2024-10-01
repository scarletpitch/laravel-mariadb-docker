@extends('layouts.app')

@section('content')
    <h1>All Transactions</h1>

    <a href="{{ route('transactions.create') }}">Create New Transaction</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Category</th>
                <th>User</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ ucfirst($transaction->category) }}</td>
                    <td>{{ $transaction->user->name ?? 'N/A' }}</td>
                    <td>{{ $transaction->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
