<x-layout>
    <x-slot:card_title>Transaksi</x-slot>
    <table id="table" class="table" table-bordered table-hover>
        <thead>
            <tr>
                <th>id</th>
                <th>Tanggal</th>
                <th>Mulai</th>
                <th>Akhir</th>
                <th>Keterangan</th>
                <th>Biaya</th>
                <th>Kendaraan</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_transaksi as  $Transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Transaksi->tanggal }}</td>
                <td>{{ $Transaksi->mulai }}</td>
                <td>{{ $Transaksi->akhir }}</td>
                <td>{{ $Transaksi->keterangan }}</td>
                <td>{{ $Transaksi->biaya }}</td>
                <td>{{ $Transaksi->kendaraan_id }}</td>
                <td>{{ $Transaksi->area_parkir_id }}</td>
                <td>
                <a type="button" class="btn btn-primary mb-2" href="">View</a> | <a type="button" class="btn btn-success mb-2" href="#?id={{ $Jenis->id }}&edit=edit">Edit</a> |
                <a type="button" class="btn btn-danger mb-2" href="#?id={{ $Jenis->id }}&delete=delete">Delete</a>
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
</x-layout>
