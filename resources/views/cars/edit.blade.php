@extends('layouts.app')

@section('title', 'Edit Mobil')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"><i class="fas fa-edit"></i> Edit Mobil</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Brand</label>
                            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" 
                                   value="{{ old('brand', $car->brand) }}" required>
                            @error('brand')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Model</label>
                            <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" 
                                   value="{{ old('model', $car->model) }}" required>
                            @error('model')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tahun</label>
                            <input type="text" name="year" class="form-control @error('year') is-invalid @enderror" 
                                   value="{{ old('year', $car->year) }}" required>
                            @error('year')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Warna</label>
                            <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" 
                                   value="{{ old('color', $car->color) }}" required>
                            @error('color')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="available" {{ $car->status == 'available' ? 'selected' : '' }}>Tersedia</option>
                                <option value="reserved" {{ $car->status == 'reserved' ? 'selected' : '' }}>Reserved</option>
                                <option value="sold" {{ $car->status == 'sold' ? 'selected' : '' }}>Terjual</option>
                            </select>
                            @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Harga (Rp)</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" 
                                   value="{{ old('price', $car->price) }}" required>
                            @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kilometer</label>
                            <input type="number" name="mileage" class="form-control @error('mileage') is-invalid @enderror" 
                                   value="{{ old('mileage', $car->mileage) }}" required>
                            @error('mileage')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mesin</label>
                            <input type="text" name="engine" class="form-control @error('engine') is-invalid @enderror" 
                                   value="{{ old('engine', $car->engine) }}">
                            @error('engine')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Transmisi</label>
                            <input type="text" name="transmission" class
                            ="form-control @error('transmission') is-invalid @enderror"
value="{{ old('transmission', $car->transmission) }}">
@error('transmission')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
</div>
<div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror" 
                              required>{{ old('description', $car->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Foto Mobil</label>
                    @if($car->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $car->image) }}" alt="Current image" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
                    @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update
                    </button>
                    <a href="{{ route('cars.show', $car) }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>