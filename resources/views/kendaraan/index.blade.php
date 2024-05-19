@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Kendaraan</h1>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No Pol</th>
                    <th scope="col">No Mesin</th>
                    <th scope="col">Jenis Mobil</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Kapasitas</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kendaraan as $k)
                    <tr>
                        <td>{{ $k->no_pol }}</td>
                        <td>{{ $k->no_mesin }}</td>
                        <td>{{ $k->jenis_mobil }}</td>
                        <td>{{ $k->nama_mobil }}</td>
                        <td>{{ $k->merek }}</td>
                        <td>{{ $k->kapasitas }}</td>
                        <td>{{ $k->tarif }}</td>
                        <td>
                            <a href="{{ route('kendaraan.edit', $k->no_pol) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('kendaraan.destroy', $k->no_pol) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
