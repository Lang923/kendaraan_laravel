@extends('layouts.app')

@section('content')
    <h1>Tambah Penyewa</h1>
    <form action="{{ route('penyewa.store') }}" method="POST">
        @csrf
        <label>Nama Penyewa</label>
        <input type="text" name="nama_penyewa">
        <label>Alamat</label>
        <input type="text" name="alamat">
        <label>No Hp</label>
        <input type="text" name="no_hp">
        <button type="submit">Simpan</button>
    </form>
@endsection
