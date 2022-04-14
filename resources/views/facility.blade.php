@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{__("string.Facility")}}</h1>
                    <p class="caps text-white">{{__("string.The architecture in Kasepuhan Sinar Resmi still uses Sundanese architecture. This can be seen from the physical features of the Sundanese buildings in Kasepuhan Sinar Resmi. Apart from its physical form, the characteristic that has been applied until now is still maintained, namely the division of the building mass based on its function.")}}</p>

                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <img src="{{asset('images/hero-facility.jpeg')}}" alt="Facility" width="100%">
            </div>
        </div>
        @foreach ($facilities as $f)
            <div class="row align-items-center mb-5 {{ !$loop->odd ? 'flex-row-reverse' : null }}">
                <div class="col-sm-7 p-5">
                    <div class="owl-carousel owl-theme">
                        @foreach ($f->images as $k => $img)
                        <a href="{{ asset($img) }}" data-lightbox="{{$f->slug}}">
                            <img class="d-block w-100" src="{{ asset($img) }}" alt="{{$f->slug}}">
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="col-sm-5">
                    <h3>{{ $f->title }}</h3>
                    @if (LaravelLocalization::getCurrentLocale() == "en")
                        <p class="text-muted">
                            {{ $f->short_desc }}
                        </p>
                    @else 
                        <p class="text-muted">
                            {{ $f->short_desc_id }}
                        </p>   
                    @endif
                    
                    @if($f->warehouse_url)
                        <a href="{{ url('/facility/'.$f->slug) }}">See in 3D</a>
                    @endif
                </div>
            </div>

        @endforeach

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
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        })
    </script>
@endpush
