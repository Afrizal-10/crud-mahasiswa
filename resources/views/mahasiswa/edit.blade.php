@extends('layout')

@section('content')
    <h3>Edit Mahasiswa</h3>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control mb-2">
        <label>Npm</label>
        <input type="text" name="npm" value="{{ $mahasiswa->npm }}" class="form-control mb-2">
        <label>Fakultas</label>
        <input type="text" name="fakultas" value="{{ $mahasiswa->fakultas }}" class="form-control mb-2">
        <label>Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" value="{{ $mahasiswa->jenis_kelamin }}" class="form-control mb-2">
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}" class="form-control mb-2">

        <button class="btn btn-primary">Edit</button>
    </form>
    
@endsection