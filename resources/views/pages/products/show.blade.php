@extends('layouts.app')

@section('title', 'Product Details')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product Details</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></div>
                    <div class="breadcrumb-item active">Details</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Product Information</h2>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>{{ $product->name }}</h4>
                                <p><strong>Category:</strong> {{ $product->category->name }}</p>
                                <p><strong>Description:</strong> {{ $product->description }}</p>
                                <p><strong>Price:</strong> {{ $product->price }}</p>
                                <p><strong>Tags:</strong> {{ $product->tags }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
