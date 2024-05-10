@extends('layouts.app')

@section('title', 'Transactions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Transactions</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Transactions</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Transactions</h2>
                <p class="section-lead">
                    You can manage all transactions, such as viewing and updating.
                </p>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Transactions</h4>
                            </div>
                            <div class="card-body text-center">
                                @if ($transactions->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table-striped table">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama User</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $transaction->id }}</td>
                                                    <td>{{ $users->where('id', $transaction->user_id)->first()->name }}</td>
                                                    <td>Rp{{ number_format($transaction->total_price) }}</td>
                                                    <td>{{ $transaction->status }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href='{{ route('transactions.show', $transaction->id) }}'
                                                                class="btn btn-sm btn-primary btn-icon">
                                                                <i class="fas fa-eye"></i> Show
                                                            </a>
                                                            <a href="{{ route('transactions.edit', $transaction->id) }}"
                                                                class="btn btn-sm btn-info btn-icon ml-2">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="float-right">
                                        {{ $transactions->links() }}
                                    </div>
                                @else
                                    <p>No transactions available.</p>
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
