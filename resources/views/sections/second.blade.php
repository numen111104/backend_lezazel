        <section class="second-page" id="review">
            <h1>Berikan Testimoni Anda!</h1>
            <div class="form-destination">
                <form action={{ route("store-review") }} method="POST">
                    @csrf
                    <div class="top">
                        <span>Form</span>
                    </div>
                    <div class="bottom">
                        <span>
                            <div class="header">
                                <i class="bi bi-person"></i>
                                <input type="text" placeholder="Nama" name="name">
                            </div>
                            <p>Siapa Nama Anda?</p>
                        </span>
                        <span>
                            <div class="header">
                                <i class="bi bi-stars"></i>
                                <div class="rating">
                                    <label>
                                        <input type="radio" name="ratings" value="1" />
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="ratings" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="ratings" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="ratings" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="ratings" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                </div>
                            </div>
                            <p>1-5 Rating</p>
                        </span>
                        <span>
                            <div class="header">
                                <i class="bi bi-chat-right-text-fill"></i>
                                <input type="textarea" name="comment" placeholder="Komentar">
                            </div>
                                <p>Isi Komentar</p>
                        </span>
                        <span>
                            <div class="header">
                                <i class="bi bi-person-workspace"></i>
                                <input type="text" name="position" placeholder="Posisi">
                            </div>
                                <p>Saya seorang ...</p>
                        </span>
                        <button type="submit"><i class="bi bi-send"></i></button>
                    </div>
                </form>
            </div>
            <div class="container-marquee">
                <div class="marquee">
                    <div class="marquee-inner">
                        <span>
                            <img src="{{ asset('img/manner/ayam-bakar.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-kuah.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-crispi.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng-telur.jpg') }}" alt="">
                        </span>
                        <span>
                            <img src="{{ asset('img/manner/ayam-bakar.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-kuah.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-crispi.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng-telur.jpg') }}" alt="">
                        </span>
                    </div>
                </div>
                <div class="marquee">
                    <div class="marquee-inner">
                        <span>
                            <img src="{{ asset('img/manner/ayam-kuah.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-crispi.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng-telur.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-bakar.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng.jpg') }}" alt="">
                        </span>
                        <span>
                            <img src="{{ asset('img/manner/ayam-kuah.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-crispi.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng-telur.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-bakar.jpg') }}" alt="">
                            <img src="{{ asset('img/manner/ayam-goreng.jpg') }}" alt="">
                        </span>
                    </div>
                </div>
                <div class="dec"></div>
            </div>
        </section>
