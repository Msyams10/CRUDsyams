@extends('layout')

@section('konten')

<h4>tambah siswa</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>NIM</label>
    <input type="number" name="NIM" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="Nama" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="Alamat" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="No_HP" class="form-control mb-2">

    <button class="btn btn-primary">submit</button>
</form>

@endsection