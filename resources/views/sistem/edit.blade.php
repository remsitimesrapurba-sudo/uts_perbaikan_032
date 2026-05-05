@extends('layout.app')

@section('title', 'Edit Buku')

@section('content')
<h2>Edit Pasien</h2>
<form action="{{ route('sistem.update', $pasien->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>no No_rekam_medis</label>
        <input type="text" name="no_rekam_medis" class="form-control" value="{{ $pasien->no_rekam_medis }}" required>
    </div>
    <div class="mb-3">
        <label>nama_pasien</label>
        <input type="text" name="nama_pasien" class="form-control" value="{{ $pasien->nama_pasien }}" required>
    </div>
    <div class="mb-3">
        <label>jenis_kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" value="{{ $pasien->jenis_kelamin }}" required>
    </div>
    <div class="mb-3">
        <label>umur</label>
        <textarea name="umur" class="form-control" required>{{ $pasien->umur }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('sistem.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection