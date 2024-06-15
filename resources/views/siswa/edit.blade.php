@extends('layout')

@section('konten')

<h4>edit siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label>NIM</label>
    <input type="number" name="NIM" value="{{ $siswa->NIM }}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="Nama" value="{{ $siswa->Nama }}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="Alamat" value="{{ $siswa->Alamat }}" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="No_HP" value="{{ $siswa->No_HP }}" class="form-control mb-2">

    <button class="btn btn-primary">edit</button>
</form>

@endsection