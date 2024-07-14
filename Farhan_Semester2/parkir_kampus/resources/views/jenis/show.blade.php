@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Jenis</h1>
        <a href="{{ route('admin.jenis.create') }}" class="btn btn-primary">Tambah Jenis</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenis as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('admin.jenis.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.jenis.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection