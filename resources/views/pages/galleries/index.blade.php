@extends('layouts.app')

@section('title', 'Product Galleries')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product Galleries</h1>
                <div class="section-header-button">
                    <a href="{{ route('galleries.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Product Galleries</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Product Galleries</h2>
                <p class="section-lead">
                    You can manage all product galleries, such as editing, deleting and more.
                </p>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Product Galleries</h4>
                            </div>
                            <div class="card-body text-center">
                                @if ($galleries->count() > 0)
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Produk</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $gallery->id }}</td>
                                                <td>{{ $product->find($gallery->product_id)->name }}</td>
                                                <td><img src="{{ $gallery->url }}" alt="Gallery Image" style="max-width: 100px;"></td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('galleries.edit', $gallery->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('galleries.destroy', $gallery->id) }}"
                                                            method="POST" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $galleries->links() }}
                                </div>
                                @else
                                    <div class="alert alert-danger">
                                        No data found
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
