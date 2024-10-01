<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <!-- Google Font for Cute Style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Link to Component-Specific CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <h1>Expense Tracker</h1>
        <nav>
            <ul>
                <li><a href="{{ route('transactions.index') }}">Transactions</a></li>
                <li><a href="{{ route('transactions.create') }}">Create Transaction</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>˚ ༘♡ ⋆｡˚ Expense Tracker by Pisha ⋆ ˚｡⋆୨୧˚</p>
    </footer>

</body>
</html>
