@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Tambah Data Sewa</h1>
        <form action="{{ route('sewa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_pol">No Pol</label>
                <select name="no_pol" id="no_pol" class="form-control" required>
                    <option value="">Pilih Kendaraan</option>
                    @foreach($kendaraan as $k)
                        <option value="{{ $k->no_pol }}">{{ $k->no_pol }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tgl_sewa">Tanggal Sewa</label>
                <input type="date" name="tgl_sewa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tlp_tujuan">Telepon Tujuan</label>
                <input type="text" name="tlp_tujuan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat_tujuan">Alamat Tujuan</label>
                <input type="text" name="alamat_tujuan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="biaya_tujuan">Biaya Sewa</label>
                <input type="number" name="biaya_tujuan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" name="kota" class="form-control" value="Pontianak" required>
            </div>
            <div class="form-group">
                <label for="id_penyewa">ID Penyewa</label>
                <select name="id_penyewa" id="id_penyewa" class="form-control" required>
                    <option value="">Pilih Penyewa</option>
                    @foreach($penyewa as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penyewa }}</option>
                    @endforeach
                </select>
                @error('id_penyewa')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jlh_penumpang">Jumlah Penumpang</label>
                <input type="number" name="jlh_penumpang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_kwitansi">ID Kwitansi</label>
                <select name="id_kwitansi" id="id_kwitansi" class="form-control" required>
                    <option value="">Pilih Kwitansi</option>
                    @foreach($kwitansi as $k)
                        <option value="{{ $k->id }}">{{ $k->tgl_kwitansi }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
