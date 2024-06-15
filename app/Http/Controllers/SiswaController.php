<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tampil() {
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));   
    }
    public function tambah() {
        return view('siswa.tambah');   
    }
    public function submit(Request $request) {
        $siswa = new Siswa();
        $siswa->NIM = $request->NIM;
        $siswa->Nama = $request->Nama;
        $siswa->Alamat = $request->Alamat;
        $siswa->No_HP = $request->No_HP;
        $siswa->save();

        return redirect()->route('siswa.tampil');
    
    }
    
    function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }
    function update(Request $request, $id) {
        $siswa = Siswa::find($id);
        $siswa->NIM = $request->NIM;
        $siswa->Nama = $request->Nama;
        $siswa->Alamat = $request->Alamat;
        $siswa->No_HP = $request->No_HP;
        $siswa->update();

        return redirect()->route('siswa.tampil');
    
    }
    function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.tampil');
        
    }
}
