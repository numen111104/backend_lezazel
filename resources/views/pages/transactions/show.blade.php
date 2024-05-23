@extends('layouts.app')

@section('title', 'Transaction Details')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Transaction Details</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></div>
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
                                        <div class="form-group">
                                            <label for="transaction_id">Transaction ID</label>
                                            <input id="transaction_id" type="text" class="form-control"
                                                value="{{ $transaction->id }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_name">User Name</label>
                                            <input id="user_name" type="text" class="form-control"
                                                value="{{ $user->name }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input id="address" type="text" class="form-control"
                                                value="{{ $transaction->address }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="payment">Payment</label>
                                            <input id="payment" type="text" class="form-control"
                                                value="{{ $transaction->payment }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_price">Total Price</label>
                                            <input id="total_price" type="text" class="form-control"
                                                value="Rp{{ number_format($transaction->total_price) }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_price">Shipping Price</label>
                                            <input id="shipping_price" type="text" class="form-control"
                                                value="Rp{{ number_format($transaction->shipping_price) }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input id="status" type="text" class="form-control"
                                                value="{{ $transaction->status }}" readonly>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back</a>
                                        <a href="{{ route('transactions.edit', $transaction->id) }}"
                                            class="btn btn-primary">Edit</a>
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
