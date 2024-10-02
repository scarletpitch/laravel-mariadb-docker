@extends('layouts.app')

@section('content')
    <h1>Create New Transaction</h1>

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" step="0.01" name="amount" id="amount" class="custom-input" required>

                <label for="description" class="form-label">Description:</label>
                <input type="text" name="description" id="description" class="custom-input" required>
            </div>

            <div class="col-lg">
                <label for="category" class="form-label">Category:</label>
                <select name="category" id="category" class="custom-select" required>
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                    <option value="saving">Saving</option>
                </select>

                <label for="date" class="form-label">Date:</label>
                <input type="date" name="date" id="date" class="custom-input" required>
            </div>
        </div>
        <button class="btn btn--back" onclick="window.location='{{ route('transactions.index') }}'">Back</button>
        <button type="submit" class="btn btn--confirm">Save Transaction</button>
    </form>
@endsection
