@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kwitansi</h1>
        <form action="{{ route('kwitansi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tgl_kwitansi">Tanggal Kwitansi</label>
                <input type="date" name="tgl_kwitansi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
