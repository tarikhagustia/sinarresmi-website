@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{__("string.Facility")}}</h1>
                    <p class="caps text-white">{{__("string.The architecture in Kasepuhan Sinar Official still uses Sundanese architecture. This can be seen from the physical features of the Sundanese buildings in Kasepuhan Sinar Official. Apart from its physical form, the characteristic that has been applied until now is still maintained, namely the division of the building mass based on its function.")}}</p>

                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        @foreach ($facilities as $f)
            
            <div class="row align-items-center mb-5 {{ !$loop->odd ? 'flex-row-reverse' : null }}">
                <div class="col-sm-7 p-5">
                    <div id="carousel-{{$f->slug}}" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                             @foreach ($f->images as $k => $img)
                                <div class="carousel-item {{$k==0?'active':''}}">
                                    <img class="d-block w-100" src="{{ asset($img) }}" alt="{{$f->slug}}">
                                </div>
                             @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-{{$f->slug}}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-{{$f->slug}}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-5">
                    <h3>{{ $f->title }}</h3>
                    <p class="text-muted">
                        {{ $f->short_desc }}
                    </p>
                    <a href="{{ url('/facility/'.$f->slug) }}">See in 3D</a>
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
    </script>
@endpush
