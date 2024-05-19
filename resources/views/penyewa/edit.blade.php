@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penyewa</h1>
    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Penyewa</label>
            <input type="text" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $penyewa->alamat }}" class="form-control">
        </div>
        <div class="form-group">
            <label>No Hp</label>
            <input type="text" name="no_hp" value="{{ $penyewa->no_hp }}" class="form-control">
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
