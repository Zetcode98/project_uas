<x-layout>
    <x-slot name="card_title">Kampus</x-slot>
    
    <table id="table" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_kampus as $Kampus)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Kampus->nama }}</td>
                <td>{{ $Kampus->alamat }}</td>
                <td>{{ $Kampus->latitude }}</td>
                <td>{{ $Kampus->longitude }}</td>
                <td>
                    <a href="{{ url('#?id=' . $Kampus->id . '&edit=edit') }}" class="btn btn-success mb-2">Edit</a> |
                    <a href="{{ url('#?id=' . $Kampus->id . '&delete=delete') }}" class="btn btn-danger mb-2">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endpush
</x-layout>
