<section class="fifth-page">
    <h1>Review dari mereka</h1>
    @if ($reviews->count() > 0)
        <div class="container-card-client">
            <div class="owl-carousel owl-theme">
                @foreach ($reviews as $review)
                    <div class="card-client">
                        @switch($review->ratings)
                            @case(1)
                                <div class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            @break

                            @case(2)
                                <div class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            @break

                            @case(3)
                                <div class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            @break

                            @case(4)
                                <div class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            @break

                            @case(5)
                                <div class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            @break

                            @default
                                <div class="star">
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                        @endswitch
                        <p>{{ Str::limit($review->comment, 80) }}</p>
                        <div class="profile">
                            <img src="{{ asset('img/avatar/avatar-' . rand(1, 5) . '.png') }}">
                            <div class="desc-card">
                                <h2>{{ explode(' ', $review->user->name)[0] }}</h2>
                                <p>{{ $review->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="container-card-client" style="margin: auto; text-align: center">
                    <div class="card-client" style="margin: auto; padding: 20px; align-items: center;">
                        <h3>Belum Ada Review nih🥺<br><a style="color: white" href="#review">Isi review</a></h3>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
