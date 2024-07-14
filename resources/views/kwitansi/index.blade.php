@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Kwitansi</h1>
        <a href="{{ route('kwitansi.create') }}" class="btn btn-primary mb-3">Tambah Kwitansi</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal Kwitansi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kwitansi as $k)
                    <tr>
                        <td>{{ $k->id}}</td>
                        <td>{{ $k->tgl_kwitansi }}</td>
                        <td>
                            <a href="{{ route('kwitansi.edit', $k->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('kwitansi.destroy', $k->id) }}" method="POST" style="display:inline;">
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
