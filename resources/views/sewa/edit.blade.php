@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Data Sewa</h1>
    <form action="{{ route('sewa.update', $sewa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="no_pol">No Pol</label>
            <select name="no_pol" class="form-control" required>
                <option value="">Pilih Kendaraan</option>
                @foreach($kendaraan as $k)
                    <option value="{{ $k->no_pol }}" {{ $sewa->no_pol == $k->no_pol ? 'selected' : '' }}>{{ $k->no_pol }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_sewa">Tanggal Sewa</label>
            <input type="date" name="tgl_sewa" class="form-control" value="{{ $sewa->tgl_sewa }}" required>
        </div>
        <div class="form-group">
            <label for="tgl_selesai">Tanggal Selesai</label>
            <input type="date" name="tgl_selesai" class="form-control" value="{{ $sewa->tgl_selesai }}" required>
        </div>
        <div class="form-group">
            <label for="tlp_tujuan">Telepon Tujuan</label>
            <input type="text" name="tlp_tujuan" class="form-control" value="{{ $sewa->tlp_tujuan }}" required>
        </div>
        <div class="form-group">
            <label for="alamat_tujuan">Alamat Tujuan</label>
            <input type="text" name="alamat_tujuan" class="form-control" value="{{ $sewa->alamat_tujuan }}" required>
        </div>
        <div class="form-group">
            <label for="biaya_tujuan">Biaya Sewa</label>
            <input type="number" name="biaya_tujuan" class="form-control" value="{{ $sewa->biaya_tujuan }}" required>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" name="kota" class="form-control" value="{{ $sewa->kota }}" required>
        </div>
        <div class="form-group">
            <label for="id_penyewa">ID Penyewa</label>
            <select name="id_penyewa" id="id_penyewa" class="form-control" required>
                <option value="">Pilih Penyewa</option>
                @foreach($penyewa as $p)
                    <option value="{{ $p->id }}" {{ $sewa->id_penyewa == $p->id ? 'selected' : '' }}>{{ $p->nama_penyewa }}</option>
                @endforeach
            </select>
            @error('id_penyewa')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jlh_penumpang">Jumlah Penumpang</label>
            <input type="number" name="jlh_penumpang" class="form-control" value="{{ $sewa->jlh_penumpang }}" required>
        </div>
        <div class="form-group">
            <label for="id_kwitansi">ID Kwitansi</label>
            <select name="id_kwitansi" id="id_kwitansi" class="form-control" required>
                <option value="">Pilih Kwitansi</option>
                @foreach($kwitansi as $k)
                    <option value="{{ $k->id }}" {{ $sewa->id_kwitansi == $k->id ? 'selected' : '' }}>{{ $k->tgl_kwitansi }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
