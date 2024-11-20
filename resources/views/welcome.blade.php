<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <style>
       /* From Uiverse.io by imPradhyumn */ 
button {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
  background: #183153;
  font-family: "Montserrat", sans-serif;
  box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  border: none;
}

button:after {
  content: " ";
  width: 0%;
  height: 100%;
  background: #FFD401;
  position: absolute;
  transition: all 0.5s ease-in-out;
  right: auto;
  left: auto;
}

button:hover::after {
  right: auto;
  left: auto;
  width: 100%;
}

button span {
  text-align: center;
  text-decoration: none;
  width: 100%;
  padding: 10px 15px;
  color: #fff;
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  z-index: 20;
  transition: all 0.5s ease-in-out;
}

button:hover span {
  color: #183153;
  animation: scaleUp 0.5s ease-in-out;
}

@keyframes scaleUp {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(0.95);
  }

  100% {
    transform: scale(1);
  }
}


    </style>
</head>
<body>
    <h3 class="text-center mt-4">Selamat datang di Crud Mahasiswa</h3>
    <div class="d-flex justify-content-center">
        <button>
          <span><a href="{{ route('registrasi.tampil') }}" class="text-decoration-none text-light">Registrasi</span>
          </button>
    </div>
</body>
</html>