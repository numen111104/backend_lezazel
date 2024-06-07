<!DOCTYPE html>
<html lang="id">
@include('sections.meta')

<body>
    <nav>
        <div class="nav">
            <div class="logo">
                <img src="{{ asset('img/lezazel_full.svg') }}" alt="Lezazel">
            </div>
            <div class="hamburger">
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="bg"></div>
            </div>
        </div>
    </nav>
    <ul class="navbar">
        @if (auth()->check())
            @if (auth()->user()->roles === 'ADMIN')
                <li>Welcome {{ $username }}</li>
                <li onclick="location.href='{{ route('home.index') }}'">Dashboard</li>
                <li onclick="document.getElementById('logoutForm').submit()">Logout</li>
            @else
                <li>Welcome {{ $username }}</li>
                <li onclick="document.getElementById('logoutForm').submit()">Logout</li>
            @endif
        @else
            <li onclick="location.href='{{ route('login') }}'">Login</li>
            <li onclick="location.href='{{ route('register') }}'">Register</li>
        @endif
    </ul>

    <main>
        <!-- landing-page -->
        @include('sections.zero')
        <!-- first-page -->
        @include('sections.first')
        <!-- second-page -->
        @include('sections.second')
        <!-- third-page -->
        @include('sections.third')
        <!-- fourth-page -->
        {{-- @include('sections.fourth') --}}
        <!-- fifth-page -->
        @include('sections.fifth')
        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </main>
    {{-- Footer --}}
    @include('sections.footer')
    <script src="{{ asset('js/landing/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            dots: false,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                570: {
                    items: 2
                },
                890: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1500: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>
