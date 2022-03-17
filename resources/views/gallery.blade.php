@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{__("string.Gallery")}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container"> 
        <div class="row">
            <div class="col-sm-12">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @foreach($galleries as $gallery)
                <div class="row py-5">
                    <div class="col-12">
                        <h3 class="text-center mb-5">{{$gallery->title}}</h3>
                        <div class="owl-carousel owl-theme">
                            @foreach ($gallery->images as $k => $img)
                                <a href="{{ asset($img) }}" data-lightbox="{{$gallery->title}}">
                                    <img class="d-block w-100" src="{{ asset($img) }}" alt="{{$gallery->title}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop

@push('js')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            items:5,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        })
    </script>
@endpush

