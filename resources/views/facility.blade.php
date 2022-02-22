@extends('layouts.master')

@section('content')
    <div
        style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">Facility</h1>
                    <p class="caps text-white">The architecture in Kasepuhan Sinar Official still uses Sundanese
                        architecture. This can be seen from the physical features of the Sundanese buildings in Kasepuhan
                        Sinar Official. Apart from its physical form, the characteristic that has been applied until now is
                        still maintained, namely the division of the building mass based on its function.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-sm-7 p-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_0.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_1.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_2.png') }}">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <h3>Imah Warga</h3>
                <p class="text-muted">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            
            <div class="col-sm-5">
                <h3>Bale Riung</h3>
                <p class="text-muted">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

            <div class="col-sm-7 p-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_0.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_1.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_2.png') }}">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-sm-7 p-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_0.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_1.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_2.png') }}">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <h3>Leuit</h3>
                <p class="text-muted">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-sm-5">
                <h3>Pasanggrahan</h3>
                <p class="text-muted">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-sm-7 p-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_0.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_1.png') }}">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{ asset('images/imah-gede/imah_gede_2.png') }}">
                        </div>

                    </div>
                </div>
            </div>

            
        </div>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('js')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>
@endpush
