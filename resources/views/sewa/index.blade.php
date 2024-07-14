@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Data Sewa</h1>
    <a href="{{ route('sewa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">No Pol</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Telepon Tujuan</th>
                <th scope="col">Alamat Tujuan</th>
                <th scope="col">Biaya Sewa</th>
                <th scope="col">Kota</th>
                <th scope="col">Id Penyewa</th>
                <th scope="col">Jumlah Penumpang</th>
                <th scope="col">Id Kwitansi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sewa as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ optional ($s->kendaraan)->no_pol }}</td>
                    <td>{{ $s->tgl_sewa }}</td>
                    <td>{{ $s->tgl_selesai }}</td>
                    <td>{{ $s->tlp_tujuan }}</td>
                    <td>{{ $s->alamat_tujuan }}</td>
                    <td>{{ $s->biaya_tujuan }}</td>
                    <td>{{ $s->kota }}</td>
                    <td>{{ optional ($s->penyewa)->nama_penyewa }}</td>
                    <td>{{ $s->jlh_penumpang }}</td>
                    <td>{{ optional ($s->kwitansi)->tgl_kwitansi }}</td>
                    <td>
                        <a href="{{ route('sewa.edit', $s->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('sewa.destroy', $s->id) }}" method="POST" style="display:inline;">
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
