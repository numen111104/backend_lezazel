<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ asset('img/orange_logo.png') }}" alt="logo" width="100"
                class="shadow-black rounded-circle">

        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <div class="login-brand">
                <img src="{{ asset('img/lezazel_logo.svg') }}" alt="logo" width="50"
                    class="shadow-black rounded-circle">
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ request()->path() === 'dashboard/home' ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard/home') }}">Home</a>
                    </li>
                    <li class="{{ request()->path() === 'dashboard/users' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </li>
                    {{-- Category --}}
                    <li class="{{ request()->path() === 'dashboard/categories' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    {{-- Product --}}
                    <li class="{{ request()->path() === 'dashboard/products' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="{{ request()->path() === 'dashboard/galleries' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('galleries.index') }}">Galleries</a>
                    </li>
                    <li class="{{ request()->path() === 'dashboard/transactions' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('transactions.index') }}">Transactions</a>
                    </li>
                </ul>
                
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-phone"></i> Hubungi Kami
            </a>
        </div>
    </aside>
</div>
