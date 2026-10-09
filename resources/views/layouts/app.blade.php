<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini-Perpus</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        color: #263238;
        margin: 0;
    }

    nav {
        background: #173b57;
        padding: 18px 8%;
        display: flex;
        gap: 24px;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    main {
        max-width: 1100px;
        margin: 30px auto;
        padding: 0 20px;
    }

    .panel {
        background: white;
        padding: 24px;
        border-radius: 10px;
    }

    .btn {
        display: inline-block;
        padding: 9px 14px;
        background: #176b50;
        color: white;
        border: 0;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        margin: 3px;
    }

    .btn-danger {
        background: #bd3434;
    }

    .btn-secondary {
        background: #526575;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background: #edf2f7;
    }

    input,
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin: 6px 0 16px;
        box-sizing: border-box;
    }

    .alert {
        padding: 12px;
        margin-bottom: 16px;
        border-radius: 5px;
    }

    .success {
        background: #d9f4e5;
    }

    .error {
        background: #fde2e2;
    }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('books.index') }}">Mini-Perpus</a>
        <a href="{{ route('books.index') }}">Data Buku</a>
        <a href="{{ route('categories.index') }}">Kategori</a>
    </nav>

    <main>
        @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
        <div class="alert error">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </main>
</body>

</html>