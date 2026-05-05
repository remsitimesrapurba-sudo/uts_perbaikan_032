@extends('layout.app') 
@section('title', 'Daftar Buku') 

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar pasien Utama</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-success">Tambah pasien</a>
    </div>
    <div class="row">
        @foreach($pasien as $pasien)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $pasien->No_rekam_medis }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Nama pasien:  {{ $pasien->nama_pasien }}</h6>
                    <p class="card-text"><strong>jenis kelamin :</strong> {{ $pasien->jenis_kelamin }}</p>
                    <p class="card-text "><strong>umur :</strong> {{ $pasien->umur }}</p>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <small class="text-muted">Ditambahkan pada: {{ $pasien->created_at->format('d M Y') }}</small>
                </div>
            </div>
            <div class="d-flex flex-row mt-2">
                <a href="{{ route('sistem.edit', $pasien->id) }}" class="btn btn-primary me-2">Edit</a>
                <form action="{{ route('buku.destroy', $pasien->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus buku: {{ $pasien->no_rekam_medis }}? Tindakan ini tidak dapat dibatalkan.');" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    @if($pasien->isEmpty())
        <div class="alert alert-info text-center">Belum ada data buku.</div>
    @endif
</div>
@endsection