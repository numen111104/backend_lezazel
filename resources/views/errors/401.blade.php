@extends('layouts.error')

@section('title', '401')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="page-error">
        <div class="page-inner">
            <h1>401</h1>
            <div class="page-description">
                You are not authorized to view this page.
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
