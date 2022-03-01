@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{ $facility->title }}</h1>
                    <p class="caps text-white">{{ $facility->short_desc }}</p>
                        
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        
<iframe src="{{ $facility->warehouse_url }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="500" allowfullscreen></iframe>

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
