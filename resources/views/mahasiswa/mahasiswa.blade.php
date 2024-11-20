@extends('layout')

@section('content')

    <div class="d-flex">
        <h4>Daftar Mahasiswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('mahasiswa.tambah') }}">Tambah Mahasiswa</a>   
     </div>
    </div>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Npm</th>
            <th>Fakultas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>

        @foreach ($mahasiswa as $no=>$data)
            <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->npm }}</td>
            <td>{{ $data->fakultas }}</td>
            <td>{{ $data->jenis_kelamin  }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('mahasiswa.delete', $data->id) }}" method="POST"  style="display: inline;">
                    @csrf
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
@endsection