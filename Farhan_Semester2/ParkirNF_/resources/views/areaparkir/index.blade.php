@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Area Parkir</h2>
    <a href="{{ route('areaparkir.create') }}" class="btn btn-primary">Tambah Area Parkir</a>
    <table id="table" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kapasitas</th>
                <th>Keterangan</th>
                <th>ID Kampus</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_areaparkir as $areaParkir)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $areaParkir->nama }}</td>
                <td>{{ $areaParkir->kapasitas }}</td>
                <td>{{ $areaParkir->keterangan }}</td>
                <td>{{ $areaParkir->kampus_id }}</td>
                <td>
                    <a type="button" class="btn btn-primary mb-2" href="{{ route('areaparkir.view', $areaParkir->id) }}">View</a>
                    <a type="button" class="btn btn-success mb-2" href="{{ route('areaparkir.edit', $areaParkir->id) }}">Edit</a>
                    <form action="{{ route('areaparkir.destroy', $areaParkir->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mb-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @push('scripts')
        <script>
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        </script>
    @endpush
</div>
@endsection
