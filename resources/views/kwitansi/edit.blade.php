@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kwitansi</h1>
        <form action="{{ route('kwitansi.update', $kwitansi->id_kwitansi) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tgl_kwitansi">Tanggal Kwitansi</label>
                <input type="date" name="tgl_kwitansi" value="{{ $kwitansi->tgl_kwitansi }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
