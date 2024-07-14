@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Tambah Penyewa</h1>
        <form action="{{ route('penyewa.store') }}" method="POST">
            @csrf
            {{-- Form input tabel --}}
            <div class="form-group">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" name="nama_penyewa" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Penyewa</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
