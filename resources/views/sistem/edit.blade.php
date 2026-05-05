@extends('layout.app')

@section('title', 'Edit Pasien')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> 

            <div class="card shadow-sm border-0 rounded-3">
                
                <!-- HEADER -->
                <div class="card-header text-center bg-primary text-white fw-bold">
                    Edit Data Pasien
                </div>

                <!-- BODY -->
                <div class="card-body p-4">
                    <form action="{{ route('sistem.update', $Pasien->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-semibold">No Rekam Medis</label>
                            <input type="text" name="no_rekam_medis" class="form-control"
                                value="{{ $Pasien->no_rekam_medis }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Pasien</label>
                            <input type="text" name="nama_pasien" class="form-control"
                                value="{{ $Pasien->nama_pasien }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="Laki-laki" {{ $Pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $Pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Umur</label>
                            <input type="number" name="umur" class="form-control"
                                value="{{ $Pasien->umur }}" required>
                        </div>

                        <!-- BUTTON -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('sistem.index') }}" class="btn btn-secondary">
                                ← Kembali
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Update Data
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection