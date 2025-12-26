@extends('layouts.main')
@section('title', 'Mobiles Create')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="card p-4 shadow" style="min-height: 400px">
            <form action="{{ route('mobiles.update', $mobile->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="brand">Brand</label>
                    <input class="form-control" type="text" name="brand" id="brand" value="{{ $mobile->brand }}">
                    @error('brand')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="model">Model</label>
                    <input class="form-control" type="text" name="model" id="model" value="{{ $mobile->model }}">
                    @error('model')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="operating_system">Operating System</label>
                    <input class="form-control" type="text" name="operating_system" id="operating_system" value="{{ $mobile->operating_system }}">
                    @error('operating_system')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="storage_capacity">Storage Capacity (GB)</label>
                    <input class="form-control" type="number" name="storage_capacity" id="storage_capacity" value="{{ $mobile->storage_capacity }}">
                    @error('storage_capacity')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3"><label for="ram">RAM (GB)</label>
                    <input class="form-control" type="number" name="ram" id="ram" value="{{ $mobile->ram }}">
                    @error('ram')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price">Price ($)</label>
                    <input class="form-control" type="number" name="price" id="price" value="{{ $mobile->price }}">
                    @error('price')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Mobile</button>
                </div>
            </form>
        </div>
    </div>
@endsection
