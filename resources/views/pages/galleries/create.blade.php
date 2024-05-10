
@extends('layouts.app')

@section('title', 'Add Product Gallery')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Product Gallery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('galleries.index') }}">Product Galleries</a></div>
                    <div class="breadcrumb-item">Create Product Gallery</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Product Galleries</h2>
                <div class="card">
                    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Add Product Gallery</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Product</label>
                                <select name="product_id" class="form-control selectric @error('product_id') is-invalid @enderror">
                                    <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control @error('url') is-invalid @enderror" name="url">
                                @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
