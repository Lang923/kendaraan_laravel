@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kendaraan</h1>
        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_pol">No Pol</label>
                <input type="text" name="no_pol" value="{{ $kendaraan->no_pol }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="no_mesin">No Mesin</label>
                <input type="text" name="no_mesin" value="{{ $kendaraan->no_mesin }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_mobil">Jenis Mobil</label>
                <select name="jenis_mobil" class="form-control">
                    <option value="mpv" {{ $kendaraan->jenis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                    <option value="city" {{ $kendaraan->jenis_mobil == 'city' ? 'selected' : '' }}>City</option>
                    <option value="suv" {{ $kendaraan->jenis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" value="{{ $kendaraan->nama_mobil }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <select name="merek" class="form-control">
                    <option value="honda" {{ $kendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                    <option value="toyota" {{ $kendaraan->merek == 'toyota' ? 'selected' : '' }}>Toyota</option>
                    <option value="daihatsu" {{ $kendaraan->merek == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" name="kapasitas" value="{{ $kendaraan->kapasitas }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="tarif">Tarif</label>
                <input type="number" name="tarif" value="{{ $kendaraan->tarif }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
