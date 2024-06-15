@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah')}}">Tambah Siswa</a>
    </div>
</div>
<table class="table">
    <tr>
        <th>no</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No_HP</th>
    </tr>
    @foreach($siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->NIM }}</td>
        <td>{{ $data->Nama }}</td>
        <td>{{ $data->Alamat }}</td>
        <td>{{ $data->No_HP }}</td>
        <td>
            <a href="{{ route('siswa.edit')}}" class="btn btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection 