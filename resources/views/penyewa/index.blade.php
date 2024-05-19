@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penyewa</h1>
    <a href="{{ route('penyewa.create') }}" class="btn btn-primary mb-3">Tambah Penyewa</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penyewa as $p)
                <tr>
                    <td>{{ $p->id_penyewa}}</td>
                    <td>{{ $p->nama_penyewa }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>
                        <a href="{{ route('penyewa.edit', $p->id_penyewa) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('penyewa.destroy', $p->id_penyewa) }}" method="POST" style="display:inline;">
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
