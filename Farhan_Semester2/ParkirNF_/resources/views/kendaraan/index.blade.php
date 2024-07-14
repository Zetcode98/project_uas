<x-layout>
    <x-slot:card_title>Kendaraan</x-slot>
    <table id="table" class="table" table-bordered table-hover>
        <thead>
            <tr>
                <th>id</th>
                <th>Merk</th>
                <th>Pemilik</th>
                <th>Plat Nomor</th>
                <th>Tahun Beli</th>
                <th>Deskripsi</th>
                <th>Jenis</th>
                <th>Kapasitas</th>
                <th>Rating</th>
                <th>ID Jenis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_kendaraan as  $Kendaraan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Kendaraan->merk }}</td>
                <td>{{ $Kendaraan->pemilik }}</td>
                <td>{{ $Kendaraan->nopol }}</td>
                <td>{{ $Kendaraan->thn_beli }}</td>
                <td>{{ $Kendaraan->deskripsi }}</td>
                <td>{{ $Kendaraan->jenis_kendaraan_id }}</td>
                <td>{{ $Kendaraan->kapasitas_kursi }}</td>
                <td>{{ $Kendaraan->rating }}</td>
                <td>{{ $Kendaraan->jenis_id }}</td>
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
