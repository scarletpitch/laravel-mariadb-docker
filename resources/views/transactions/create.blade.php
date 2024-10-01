@extends('layouts.app')

@section('content')
    <h1>Create New Transaction</h1>

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" name="amount" id="amount" required>

        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required>

        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="income">Income</option>
            <option value="expense">Expense</option>
            <option value="saving">Saving</option>
        </select>

        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" id="user_id" required>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>

        <button type="submit">Save Transaction</button>
    </form>
@endsection
