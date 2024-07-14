@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Data Invoice</h1>
    <form action="{{ route('invoice.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_kwitansi">Id Kwitansi</label>
            <select name="id_kwitansi" id="id_kwitansi" class="form-control">
                @foreach($kwitansi as $k)
                    <option value="{{ $k->id }}" {{ $invoice->id_kwitansi == $k->id ? 'selected' : '' }}>{{ $k->tgl_kwitansi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_penyewa">Id Penyewa</label>
            <select name="id_penyewa" id="id_penyewa" class="form-control">
                @foreach($penyewa as $p)
                    <option value="{{ $p->id }}" {{ $invoice->id_penyewa == $p->id ? 'selected' : '' }}>{{ $p->nama_penyewa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="no_pol">No Pol</label>
            <select name="no_pol" id="no_pol" class="form-control">
                @foreach($kendaraan as $k)
                    <option value="{{ $k->no_pol }}" {{ $invoice->no_pol == $k->no_pol ? 'selected' : '' }}>{{ $k->no_pol }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
    <a href="{{ route('invoice.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
