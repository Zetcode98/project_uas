@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kampus</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $kendaraan)
            <tr>
                <td>{{ $kendaraan->id }}</td>
                <td>{{ $kendaraan->nama }}</td>
                <td>{{ $kendaraan->alamat }}</td>
                <td>{{ $kendaraan->latitude }}</td>
                <td>{{ $kendaraan->longitude }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
