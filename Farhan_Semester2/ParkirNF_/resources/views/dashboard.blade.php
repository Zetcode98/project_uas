<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('admin') }}">Admin</a></li>
        <li><a href="{{ route('areaparkir.index') }}">Area Parkir</a></li>
        <li><a href="{{ route('jenis.index') }}">Jenis</a></li>
        <li><a href="{{ route('kampus.index') }}">Kampus</a></li>
        <li><a href="{{ route('kendaraan.index') }}">Kendaraan</a></li>
        <li><a href="{{ route('transaksi.index') }}">Transaksi</a></li>
    </ul>
</div>
@endsection
