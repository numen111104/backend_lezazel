<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Verifikasi Email &mdash; Lezazel</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex align-items-center my-5">
                <div class="card w-100 p-5 text-center shadow rounded border-0 bg-white ">
                    <h4 class="text-dark font-weight-normal">Verifikasi Email</h4>
                    <p class="text-muted text-dark">Tautan verifikasi telah dikirim ke alamat email Anda. <br> Silakan klik tautan yang
                        disediakan dalam email untuk mengaktifkan akun Anda.</p>
                    <div class="card header bg-whitesmoke">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success mt-3">
                                Tautan verifikasi email baru telah dikirimkan ke email Anda!
                            </div>
                        @endif
                        <div class="card-body">
                            <p>Terima kasih telah mendaftar! Kami baru saja mengirimkan email ke alamat email Anda. <br>Untuk menyelesaikan proses registrasi, silakan klik tautan yang disediakan dalam email. <br> Jika Anda tidak menerima email, silakan periksa folder spam Anda.</p>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            Untuk bantuan lebih lanjut, silakan hubungi tim dukungan kami.
                        </div>
                    </div>
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-3">Kirim Ulang Email Verifikasi</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
