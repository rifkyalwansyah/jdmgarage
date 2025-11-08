@extends('layouts.app')

@section('title', 'Showroom')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-4 fw-bold">
        <i class="fas fa-garage"></i> JDM Showroom
    </h1>
    <p class="lead text-muted">Koleksi Mobil JDM Terbaik</p>
</div>

<div class="row g-4">
    @forelse($cars as $car)
    <div class="col-md-4">
        <div class="card h-100">
            @if($car->image)
                <img src="{{ asset('storage/' . $car->image) }}" class="card-img-top" alt="{{ $car->model }}" style="height: 250px; object-fit: cover;">
            @else
                <div class="bg-secondary text-center py-5" style="height: 250px;">
                    <i class="fas fa-car fa-5x text-muted"></i>
                </div>
            @endif
            
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">{{ $car->brand }} {{ $car->model }}</h5>
                    @if($car->status == 'available')
                        <span class="badge bg-success">Tersedia</span>
                    @elseif($car->status == 'reserved')
                        <span class="badge bg-warning">Reserved</span>
                    @else
                        <span class="badge bg-danger">Terjual</span>
                    @endif
                </div>
                
                <p class="text-muted mb-2">
                    <i class="fas fa-calendar"></i> {{ $car->year }} | 
                    <i class="fas fa-tachometer-alt"></i> {{ number_format($car->mileage) }} km
                </p>
                
                <h4 class="text-danger mb-3">Rp {{ number_format($car->price, 0, ',', '.') }}</h4>
                
                <div class="d-flex gap-2">
                    <a href="{{ route('cars.show', $car) }}" class="btn btn-primary flex-fill">
                        <i class="fas fa-eye"></i> Detail
                    </a>
                    <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('cars.destroy', $car) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus mobil ini?')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info text-center">
            <i class="fas fa-info-circle"></i> Belum ada mobil di showroom
        </div>
    </div>
    @endforelse
</div>

<div class="mt-4">
    {{ $cars->links() }}
</div>
