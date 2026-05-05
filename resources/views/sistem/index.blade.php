@extends('layout.app') 
@section('title', 'Daftar Pasien') 

@section('content')
<div class="container mt-5">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Daftar Pasien Utama</h2>
        <a href="{{ route('sistem.create') }}" class="btn btn-success shadow-sm">
            + Tambah Pasien
        </a>
    </div>

    <!-- LIST DATA -->
    <div class="row">
        @foreach($Pasien as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-3">

                <!-- BODY -->
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">
                        {{ $item->no_rekam_medis }}
                    </h5>

                    <h6 class="card-subtitle mb-3 text-muted">
                        {{ $item->nama_pasien }}
                    </h6>

                    <p class="mb-2">
                        <span class="badge bg-info text-dark">
                            {{ $item->jenis_kelamin }}
                        </span>
                    </p>

                    <p class="mb-0">
                        <strong>Umur:</strong> {{ $item->umur }} tahun
                    </p>
                </div>

                <!-- FOOTER -->
                <div class="card-footer bg-light border-0 d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                        {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                    </small>
                </div>

            </div>

            <!-- ACTION BUTTON -->
            <div class="d-flex justify-content-between mt-2">
                <a href="{{ route('sistem.edit', $item->id) }}" 
                   class="btn btn-outline-primary btn-sm w-50 me-1">
                    Edit
                </a>

                <form action="{{ route('sistem.destroy', $item->id) }}" method="POST" class="w-50 ms-1"
                    onsubmit="return confirm('Yakin hapus pasien: {{ $item->nama_pasien }}?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger btn-sm w-100">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <!-- EMPTY STATE -->
    @if($Pasien->isEmpty())
        <div class="alert alert-info text-center shadow-sm">
            Belum ada data pasien.
        </div>
    @endif

</div>
@endsection