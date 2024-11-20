<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center mt-3">Daftar Mahasiswa</h1>
    @if(Auth::check())
    <div class="text-center">
        <b>Hallo {{ Auth::user()->nama }}, Anda Berhasil Login</b>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>
        @endif
    <div class="mt-3 container">
        @yield('content')
    </div>
    </body>
</html>