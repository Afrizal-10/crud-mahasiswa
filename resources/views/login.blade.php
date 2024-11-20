<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="text-center mt-5">
        <h2>Login</h2>
        <p>Silahkan masuk dengan menggunakan akun yang sudah anda daftarkan!</p>

        {{-- form registrasi --}}
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf
                            <label>Email</label>
                            <input type="email" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Login</button>
                        </form>

                        @if(session('gagal'))
                           <p class="text-danger">{{ session('gagal') }}</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>