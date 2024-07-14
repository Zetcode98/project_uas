@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Area Parkir</h2>
    <p><strong>Nama:</strong> {{ $areaParkir->nama }}</p>
    <p><strong>Kapasitas:</strong> {{ $areaParkir->kapasitas }}</p>
    <p><strong>Keterangan:</strong> {{ $areaParkir->keterangan }}</p>
    <p><strong>Kampus:</strong> {{ $areaParkir->kampus_id }}</p>
    <a href="{{ route('areaparkir.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
