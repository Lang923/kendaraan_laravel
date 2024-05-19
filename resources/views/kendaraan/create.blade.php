@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Tambah Kendaraan</h1>
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_pol">No Pol</label>
                <input type="text" name="no_pol" class="form-control">
            </div>
            <div class="form-group">
                <label for="no_mesin">No Mesin</label>
                <input type="text" name="no_mesin" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_mobil">Jenis Mobil</label>
                <select name="jenis_mobil" class="form-control">
                    <option value="mpv">MPV</option>
                    <option value="city">City</option>
                    <option value="suv">SUV</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control">
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <select name="merek" class="form-control">
                    <option value="honda">Honda</option>
                    <option value="toyota">Toyota</option>
                    <option value="daihatsu">Daihatsu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" name="kapasitas" class="form-control">
            </div>
            <div class="form-group">
                <label for="tarif">Tarif</label>
                <input type="number" name="tarif" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
