@extends('layouts.error')

@section('title', '415')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="page-error">
        <div class="page-inner">
            <h1>415</h1>
            <div class="page-description">
                The page you were looking for has expired.
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
