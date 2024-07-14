@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Data Invoice</h1>
    <a href="{{ route('invoice.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Id Kwitansi</th>
                <th scope="col">Id Penyewa</th>
                <th scope="col">No Pol</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice as $i)
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->kwitansi->tgl_kwitansi }}</td>
                    <td>{{ $i->penyewa->nama_penyewa }}</td>
                    <td>{{ optional ($i->kendaraan)->no_pol }}</td>
                    <td>
                        <a href="{{ route('invoice.edit', $i->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('sewa.destroy', $i->id) }}" method="POST" style="display:inline;">
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
