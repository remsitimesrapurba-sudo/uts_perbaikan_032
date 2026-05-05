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
    <div class="row g-4">
        @foreach($Pasien as $item)
        <div class="col-md-4">

            <div class="card h-100 shadow-sm border-0 rounded-3">

                <!-- BODY -->
                <div class="card-body">
                    <h5 class="fw-bold text-primary mb-2">
                        <strong>No_Rekam_Medis: </strong> {{ $item->no_rekam_medis }}
                    </h5>

                    <h6 class="text-muted mb-3">
                        <strong>Nama Pasien : </strong>{{ $item->nama_pasien }}
                    </h6>

                    <span class="badge bg-info text-dark px-3 py-2 mb-2">
                         <strong>Jenis Kelamin :</strong> {{ $item->jenis_kelamin }}
                    </span>

                    <p class="mt-2 mb-0">
                        <strong>Umur:</strong> {{ $item->umur }} tahun
                    </p>
                </div>

                <!-- FOOTER -->
                <div class="card-footer bg-light border-0">

                    <small class="text-muted d-block mb-3">
                        {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                    </small>

                    <!-- BUTTON DALAM CARD -->
                    <div class="d-flex justify-content-between">
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

            </div>

        </div>
        @endforeach
    </div>

    <!-- EMPTY STATE -->
    @if($Pasien->isEmpty())
        <div class="alert alert-info text-center shadow-sm mt-4">
            Belum ada data pasien.
        </div>
    @endif

</div>

<!-- OPTIONAL STYLE (BIAR LEBIH HIDUP) -->
<style>
.card {
    transition: 0.3s;
}
.card:hover {
    transform: translateY(-5px);
}
</style>

@endsection