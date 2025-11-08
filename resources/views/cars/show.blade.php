@extends('layouts.app')

@section('title', $car->brand . ' ' . $car->model)

@section('content')
<div class="row">
    <div class="col-md-6">
        @if($car->image)
            <img src="{{ asset('storage/' . $car->image) }}" class="img-fluid rounded" alt="{{ $car->model }}">
        @else
            <div class="bg-secondary text-center py-5 rounded">
                <i class="fas fa-car fa-10x text-muted"></i>
            </div>
        @endif
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h2 class="mb-0">{{ $car->brand }} {{ $car->model }}</h2>
                    @if($car->status == 'available')
                        <span class="badge bg-success fs-6">Tersedia</span>
                    @elseif($car->status == 'reserved')
                        <span class="badge bg-warning fs-6">Reserved</span>
                    @else
                        <span class="badge bg-danger fs-6">Terjual</span>
                    @endif
                </div>
                
                <h3 class="text-danger mb-4">Rp {{ number_format($car->price, 0, ',', '.') }}</h3>
                
                <div class="row mb-4">
                    <div class="col-6 mb-3">
                        <div class="text-muted small">Tahun</div>
                        <div class="fw-bold">{{ $car->year }}</div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="text-muted small">Warna</div>
                        <div class="fw-bold">{{ $car->color }}</div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="text-muted small">Kilometer</div>
                        <div class="fw-bold">{{ number_format($car->mileage) }} km</div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="text-muted small">Mesin</div>
                        <div class="fw-bold">{{ $car->engine ?? '-' }}</div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="text-muted small">Transmisi</div>
                        <div class="fw-bold">{{ $car->transmission ?? '-' }}</div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <h5>Deskripsi</h5>
                    <p class="text-muted">{{ $car->description }}</p>
                </div>
                
                <div class="d-flex gap-2">
                    <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('cars.destroy', $car) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus mobil ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>
                    <a href="{{ route('cars.index') }}" class="btn btn-secondary ms-auto">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection