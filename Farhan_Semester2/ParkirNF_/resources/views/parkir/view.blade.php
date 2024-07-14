@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Parkir</h2>
    <p><strong>Merk:</strong> {{ $parkir->merk }}</p>
    <p><strong>Pemilik:</strong> {{ $parkir->pemilik }}</p>
    <!-- field lain sesuai kebutuhan -->
    <a href="{{ route('parkir.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
