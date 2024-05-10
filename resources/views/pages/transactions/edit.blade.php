@extends('layouts.app')

@section('title', 'Transaction Details')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Transaction Details</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Transactions</a></div>
                    <div class="breadcrumb-item">Transaction Details</div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                        <div class="card card-primary">
                            <div class="row m-0">
                                <div class="col-12 col-md-12 col-lg-12 p-0">
                                    <div class="card-header text-center">
                                        <h4>Transaction Info</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select id="status"
                                                    class="form-control @error('status') is-invalid @enderror"
                                                    name="status">
                                                    <option value="PENDING"
                                                        {{ old('status'), $transaction->status == 'PENDING' ? 'selected' : '' }}>
                                                        PENDING</option>
                                                    <option value="SUCCESS"
                                                        {{ old('status'), $transaction->status == 'SUCCESS' ? 'selected' : '' }}>
                                                        SUCCESS</option>
                                                    <option value="CANCELLED"
                                                        {{ old('status'), $transaction->status == 'CANCELLED' ? 'selected' : '' }}>
                                                        CANCELLED</option>
                                                    <option value="FAILED"
                                                        {{ old('status'), $transaction->status == 'FAILED' ? 'selected' : '' }}>
                                                        FAILED</option>
                                                    <option value="SHIPPING"
                                                        {{ old('status'), $transaction->status == 'SHIPPING' ? 'selected' : '' }}>
                                                        SHIPPING</option>
                                                    <option value="SHIPPED"
                                                        {{ old('status'), $transaction->status == 'SHIPPED' ? 'selected' : '' }}>
                                                        SHIPPED</option>
                                                    <option value="DELIVERED"
                                                        {{ old('status'), $transaction->status == 'DELIVERED' ? 'selected' : '' }}>
                                                        DELIVERED</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="card-footer text-center">
                                                <form action="{{ route('transactions.update', $transaction->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-primary">Update Status</button>
                                                    <a href="{{ route('transactions.index') }}"
                                                        class="btn btn-secondary">Back</a>
                                                </form>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
