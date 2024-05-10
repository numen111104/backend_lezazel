<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lezazel Food</title>
        <link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
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
        <li onclick="location.href='{{ route('home.index') }}'">Dashboard</li>
    </ul>
    
    <main>
        <!-- landing-page -->
        <section class="landing-page">
            <div class="container">
                <div class="left">
                    <div class="page-container">
                        <div><h1>Latar Belakang</h1></div>
                        <div><p>Dengan bahan dasar ayam pedaging sebagai pilar protein, lezazel tak hanya memberikan fleksibilitas dinamis, tapi juga kelezatan dalam setiap gigitannya. </p></div>
                        <div><button onclick="window.open('https://www.instagram.com/lezazel.food/', '_blank')">Cek Sekarang</button></div>
                    </div>
                    <div class="page-container">
                        <div><h1>Food</h1></div>
                        <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tenetur odio qui, recusandae amet animi rem, eum sapiente quam corporis deleniti modi ipsum est? Aut illum nostrum similique libero aperiam.</p></div>
                        <div><button onclick="location.href='./pages/food.html'">See other Food</button></div>
                    </div>
                    <div class="page-container">
                        <div><h1>Religion</h1></div>
                        <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tenetur odio qui, recusandae amet animi rem, eum sapiente quam corporis deleniti modi ipsum est? Aut illum nostrum similique libero aperiam.</p></div>
                        <div><button onclick="location.href='./pages/religion.html'">About Religion</button></div>
                    </div>
                    <div class="page-container">
                        <div><h1>Culture</h1></div>
                        <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tenetur odio qui, recusandae amet animi rem, eum sapiente quam corporis deleniti modi ipsum est? Aut illum nostrum similique libero aperiam.</p></div>
                        <div><button onclick="location.href='./pages/culture.html'">See all Culture</button></div>
                    </div>
                    <div class="page-container">
                        <div><h1>Flora & Fauna</h1></div>
                        <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tenetur odio qui, recusandae amet animi rem, eum sapiente quam corporis deleniti modi ipsum est? Aut illum nostrum similique libero aperiam.</p></div>
                        <div><button onclick="location.href='./pages/florafauna.html'">Explore Flora & Fauna</button></div>
                    </div>
                </div>
                <div>
                    <h2 class="page-switch active">01</h2>
                    <h2 class="page-switch">02</h2>
                    <h2 class="page-switch">03</h2>
                    <h2 class="page-switch">04</h2>
                    <h2 class="page-switch">05</h2>
                </div>
            </div>
            <div class="bg-img bg-img1"></div>
            <div class="bg-img bg-img2"></div>
            <div class="bg-img bg-img3"></div>
            <div class="bg-img bg-img4"></div>
            <div class="bg-img bg-img5"></div>
            <div class="dec-landing-page"></div>
        </section>

        <!-- first-page -->
        <section class="first-page" id="destination">
            <h1>Top Products</h1>
            <div class="container-card">
                <div class="card">
                    <img src="{{ asset('img/lezazel1.jpg') }}">
                    <div class="desc">
                        <h2>Froozen Food</h2>
                        <p>Candi Borobudur adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta.</p>
                        <button onclick="location.href='./pages/borobudur.html'">View details</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/lezazel2.jpg') }}">
                    <div class="desc">
                        <h2>Labuan Bajo</h2>
                        <p>Labuan Bajo merupakan sebuah surga tersembunyi yang ada di Indonesia bagian timur. Desa ini terletak di Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur yang berbatasan langsung dengan Nusa Tenggara Barat dan dipisahkan oleh Selat Sape.</p>
                        <button onclick="location.href='./pages/labuan_bajo.html'">View details</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/lezazel3.jpg') }}">
                    <div class="desc">
                        <h2>Ulun Danu Beratan Temple</h2>
                        <p>Pura Ulun Danu Beratan / Pura Penataran Agung Ulun Danu Beratan adalah salah satu  dari sembilan Pura Khayangan Jagat yang mengelilingi Pulau Bali, Pura ini adalah tempat yang digunakan oleh umat Hindu Indonesia untuk memuja Tuhan Yang Maha Esa</p>
                        <button onclick="location.href='./pages/ulun_danu_beratan.html'">View details</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/lezazel4.jpg') }}">
                    <div class="desc">
                        <h2>Gunung Bromo</h2>
                        <p>Gunung Bromo atau dalam bahasa Tengger dieja "Brama", juga disebut Kaldera Tengger, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut.</p>
                        <button onclick="location.href='./pages/bromo.html'">View details</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- second-page -->
        <section class="second-page">
            <h1>Explore a new world</h1>
            <div class="form-destination">
                <div class="top">
                    <button>Stays</button>
                    <button>Flight</button>
                </div>
                <div class="bottom">
                    <button>
                        <div class="header">
                            <i class="bi bi-cursor"></i>
                            <input type="text" placeholder="Location">
                        </div>
                        <p>What are you going?</p>
                    </button>
                    <button>
                        <div class="header">
                            <i class="bi bi-calendar-week"></i>
                            <h2>Check in</h2>
                        </div>
                        <p>Add date</p>
                    </button>
                    <button>
                        <div class="header">
                            <i class="bi bi-calendar-week"></i>
                            <h2>Check out</h2>
                        </div>
                        <p>Add date</p>
                    </button>
                    <button>
                        <div class="header">
                            <i class="bi bi-person"></i>
                            <h2>Travelers</h2>
                        </div>
                        <p>Add guest</p>
                    </button>
                    <button type="submit"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <div class="container-marquee">
                <div class="marquee">
                    <div class="marquee-inner">
                        <span>
                            <img src="./assets/src/images/borobudur.jpg" alt="">
                            <img src="./assets/src/images/jakarta.jpg" alt="">
                            <img src="./assets/src/images/mount.jpg" alt="">
                            <img src="./assets/src/images/mosque.jpg" alt="">
                        </span>
                        <span>
                            <img src="./assets/src/images/borobudur.jpg" alt="">
                            <img src="./assets/src/images/jakarta.jpg" alt="">
                            <img src="./assets/src/images/mount.jpg" alt="">
                            <img src="./assets/src/images/mosque.jpg" alt="">
                        </span>
                    </div>
                </div>
                <div class="marquee">
                    <div class="marquee-inner">
                        <span>
                            <img src="./assets/src/images/jakarta3.jpg" alt="">
                            <img src="./assets/src/images/labuan_bajo2.jpg" alt="">
                            <img src="./assets/src/images/prambanan.jpg" alt="">
                            <img src="./assets/src/images/bromo3.jpg" alt="">
                        </span>
                        <span>
                            <img src="./assets/src/images/jakarta3.jpg" alt="">
                            <img src="./assets/src/images/labuan_bajo2.jpg" alt="">
                            <img src="./assets/src/images/prambanan.jpg" alt="">
                            <img src="./assets/src/images/bromo3.jpg" alt="">
                        </span>
                    </div>
                </div>
                <div class="dec"></div>
            </div>
        </section>

        <section class="third-page">
            <div class="desc-video">
                <h1>Discover Amazing Experiences</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum, delectus?</p>
            </div>
            <iframe src="https://www.youtube.com/embed/XtQb3t_2SPA?si=anMCOAqdLDirlJ_s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </section>

        <section class="fourth-page">
            <h1>Let's see our gallery</h1>
            <div class="wrap">
                <div class="col">
                    <div>
                        <p>Candi Borobudur, Magelang</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/image1.webp" class="long" loading="lazy">
                    </div>
                    <div>
                        <p>Pahawang island, Lampung</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/bahari.jpeg" class="small" loading="lazy">
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p>Mount Bromo</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/volcano-with-mist-sunset.jpg" class="small" loading="lazy">
                    </div>
                    <div>
                        <p>Jalak Bali</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/Jalak Bali.jpeg" class="long" loading="lazy">
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p>Pantai Ora, Maluku</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/sumatera.jpeg" class="long" loading="lazy">
                    </div>
                    <div>
                        <p>Tanah Lot, Bali</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/tanah lot.jpg" class="small" loading="lazy">
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p>Kue Putu</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/kue putu lewat.jpeg" class="small" loading="lazy">
                    </div>
                    <div>
                        <p>Rendang</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/rendang.jpeg" class="long" loading="lazy">
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p>Orang utan</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/uut kalimantan.jpeg" class="long" loading="lazy">
                    </div>
                    <div>
                        <p>Soto ayam</p>
                        <b class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, assumenda?</b>
                        <img src="./assets/src/images/gallery/soto.jpeg" class="small" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="show-image"></div>
        </section>


        <section class="fifth-page">
            <h1>What our clients say?</h1>
            <div class="container-card-client">
                <div class="owl-carousel owl-theme">
                    <!-- card 1 -->
                    <div class="card-client">
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et nisi cum alias aut, fugit pariatur quia voluptate molestiae!</p>
                        <div class="profile">
                            <img src="./assets/src/images/profile.jpg">
                            <div class="desc-card">
                                <h2>Nama orang 1</h2>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>

                    <!-- card 2 -->
                    <div class="card-client">
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et nisi cum alias aut, fugit pariatur quia voluptate molestiae!</p>
                        <div class="profile">
                            <img src="./assets/src/images/profile.jpg">
                            <div class="desc-card">
                                <h2>Nama orang 2</h2>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>

                    <!-- card 3 -->
                    <div class="card-client">
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et nisi cum alias aut, fugit pariatur quia voluptate molestiae!</p>
                        <div class="profile">
                            <img src="./assets/src/images/profile.jpg">
                            <div class="desc-card">
                                <h2>Nama orang 3</h2>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 4 -->
                    <div class="card-client">
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et nisi cum alias aut, fugit pariatur quia voluptate molestiae!</p>
                        <div class="profile">
                            <img src="./assets/src/images/profile.jpg">
                            <div class="desc-card">
                                <h2>Nama orang 4</h2>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>

                    <!-- card 5 -->
                    <div class="card-client">
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et nisi cum alias aut, fugit pariatur quia voluptate molestiae!</p>
                        <div class="profile">
                            <img src="./assets/src/images/profile.jpg">
                            <div class="desc-card">
                                <h2>Nama orang 5</h2>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>

                    <!-- card 6 -->
                    <div class="card-client">
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et nisi cum alias aut, fugit pariatur quia voluptate molestiae!</p>
                        <div class="profile">
                            <img src="./assets/src/images/profile.jpg">
                            <div class="desc-card">
                                <h2>Nama orang 6</h2>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="subscribe">
            <h1>Subscribe for more</h1>
            <div class="input">
                <input type="email" name="email" placeholder="Enter your email address">
                <button>Subscribe</button>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <div class="desc">
                    <img src="./assets/src/images/logo.png">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, rerum.</p>
                </div>
                <div class="navigation">
                    <ul>
                        <li>Quick Links</li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tour</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Religion</a></li>
                        <li><a href="#">Flora & Fauna</a></li>
                    </ul>
                    <ul>
                        <li>Support</li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">How it</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Reporting</a></li>
                    </ul>
                    <ul>
                        <li>Contact us</li>
                        <li>+628 12-3456-7890</li>
                        <li>fps@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright @2023 by Fauzan Dev</p>
                <div class="social-media">
                    <i class="bi bi-facebook"></i>  
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-instagram"></i>
                </div>
                <div class="term-privacy">
                    <p><a href="#">Terms of use</a></p>
                    <p><a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/landing/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            dots: false,
            margin:10,
            nav: true,
            responsive:{
                0:{
                    items:1
                },
                600: {
                    items:2
                },
                890:{
                    items:3
                },
                1200: {
                    items:4
                },
                1500:{
                    items:5
                }
            }
        })
    </script>
</body>
</html>