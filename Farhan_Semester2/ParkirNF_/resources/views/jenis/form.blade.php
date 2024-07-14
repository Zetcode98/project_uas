@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($jenis) ? 'Edit Jenis' : 'Tambah Jenis' }}</h2>
    <form action="{{ isset($jenis) ? route('jenis.update', $jenis->id) : route('jenis.store') }}" method="POST">
        @csrf
        @if(isset($jenis))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $jenis->nama ?? '') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($jenis) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
