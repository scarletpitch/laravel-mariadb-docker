<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font for Cute Style -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Link to Component-Specific CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



</head>
<body>

    <header>
        <h1>Pisha's Diary</h1>
        <nav>
            <ul>
                <button class="btn btn--confirm" onclick="window.location='{{ route('transactions.index') }}'">Transactions</button>
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
