@extends('layout.app')
@section('title', 'Tambah Pasien')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Form Tambah  Pasien</div>
                <div class="card-body">
                    <form action="{{ route('sistem.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">no_rekam_medis</label>
                            <input type="text" name="no_rekam_medis" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">nama_pasien</label>
                            <input type="text" name="nama_pasien" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">jenis_kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">umur</label>
                            <textarea name="umur" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('sistem.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection