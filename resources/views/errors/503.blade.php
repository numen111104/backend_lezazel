@extends('layouts.error')

@section('title', '503')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="page-error">
        <div class="page-inner">
            <h1>503</h1>
            <div class="page-description">
                The service is temporarily unavailable. Please try again later.
            </div>
            <div class="page-search">
                <div class="mt-3">
                    <a href="{{ route('landing') }}">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
