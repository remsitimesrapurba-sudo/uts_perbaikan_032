@extends('layout.app')
@section('title', 'Tambah Pasien')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0 rounded-3">
                
                <!-- HEADER -->
                <div class="card-header bg-primary text-white fw-bold text-center py-3">
                    Form Tambah Pasien
                </div>

                <!-- BODY -->
                <div class="card-body p-4">
                    <form action="{{ route('sistem.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">No Rekam Medis</label>
                            <input type="text" name="no_rekam_medis" 
                                class="form-control" placeholder="Masukkan No Rekam Medis" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Pasien</label>
                            <input type="text" name="nama_pasien" 
                                class="form-control" placeholder="Masukkan Nama Pasien" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Umur</label>
                            <input type="number" name="umur" 
                                class="form-control" placeholder="Masukkan Umur" required>
                        </div>

                        <!-- BUTTON -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('sistem.index') }}" class="btn btn-secondary">
                                ← Kembali
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Simpan Data
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection