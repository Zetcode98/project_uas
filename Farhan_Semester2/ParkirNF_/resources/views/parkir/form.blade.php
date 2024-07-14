@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($parkir) ? 'Edit Parkir' : 'Tambah Parkir' }}</h2>
    <form action="{{ isset($parkir) ? route('parkir.update', $parkir->id) : route('parkir.store') }}" method="POST">
        @csrf
        @if(isset($parkir))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" name="merk" id="merk" class="form-control" value="{{ old('merk', $parkir->merk ?? '') }}" required>
        </div>
        <!-- field lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">{{ isset($parkir) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
