@extends('layout')

@section('content')
    <h3>Tambah Mahasiswa</h3>

    <form action="{{ route('mahasiswa.submit') }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2">
        <label>Npm</label>
        <input type="text" name="npm" class="form-control mb-2">
        <label>Fakultas</label>
        <input type="text" name="fakultas" class="form-control mb-2">
        <label>Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control mb-2">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control mb-2">

        <button class="btn btn-primary">Simpan</button>
    </form>
    
@endsection