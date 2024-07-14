@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($areaParkir) ? 'Edit Area Parkir' : 'Tambah Area Parkir' }}</h2>
    <form action="{{ isset($areaParkir) ? route('areaparkir.update', $areaParkir->id) : route('areaparkir.store') }}" method="POST">
        @csrf
        @if(isset($areaParkir))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $areaParkir->nama ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="kapasitas">Kapasitas:</label>
            <input type="number" name="kapasitas" id="kapasitas" class="form-control" value="{{ old('kapasitas', $areaParkir->kapasitas ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan', $areaParkir->keterangan ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="kampus_id">Kampus:</label>
            <select name="kampus_id" id="kampus_id" class="form-control" required>
                @foreach($list_kampus as $kampus)
                    <option value="{{ $kampus->id }}" {{ old('kampus_id', $areaParkir->kampus_id ?? '') == $kampus->id ? 'selected' : '' }}>{{ $kampus->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($areaParkir) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
