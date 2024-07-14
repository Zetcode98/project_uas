@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Jenis</h2>
    <p><strong>Nama:</strong> {{ $jenis->nama }}</p>
    <a href="{{ route('jenis.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
