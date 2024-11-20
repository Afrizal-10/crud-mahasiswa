<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
   function tampil(){
    $mahasiswa = mahasiswa::get();
       return view('mahasiswa.mahasiswa', compact('mahasiswa'));
   }

   function tambah(){
       return view('mahasiswa.tambah');
   }

//    jalur menambahkan data mahasiwa
   function submit(Request $request){
    $mahasiswa = new mahasiswa();
    $mahasiswa->nama = $request->nama;
    $mahasiswa->npm = $request->npm;
    $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
    $mahasiswa->fakultas = $request->fakultas;
    $mahasiswa->alamat = $request->alamat;
    $mahasiswa->save();
    return redirect('mahasiswa');
}
   
//    edit data mahasiswa
     function edit($id){
    $mahasiswa = mahasiswa::find($id);
    return view('mahasiswa.edit', compact('mahasiswa'));
     }

    //  update data edit
    function update(Request $request, $id) {
    $mahasiswa = mahasiswa::find($id);
    $mahasiswa->nama = $request->nama;
    $mahasiswa->npm = $request->npm;
    $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
    $mahasiswa->fakultas = $request->fakultas;
    $mahasiswa->alamat = $request->alamat;  
    $mahasiswa->update();
    return redirect('mahasiswa');
    }

    // hapus data mahasiswa
    function delete($id) {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        return Redirect('mahasiswa');
    }

}
