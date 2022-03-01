<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kasepuhan Sinar Resmi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b068d24a75.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css" integrity="sha512-UwbBNAFoECXUPeDhlKR3zzWU3j8ddKIQQsDOsKhXQGdiB5i3IHEXr9kXx82+gaHigbNKbTDp3VY/G6gZqva6ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light navbar-t" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            @include('layouts.nav')

        </div>
    </div>
</nav>
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/hero-bg.png') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate fadeInUp ftco-animated hero">
                <span class="subheading">{{__('string.Welcome to Kasepuhan Sinar Resmi')}}</span>
                <h1 class="mb-4">{{__('string.Discover cultural diversity in this place')}}</h1>
                <p class="caps">{{__('string.A landscape is the result of the succession, over time, of the environmental, social, cultural, and economicproductive evolutionary processes that occur in an area')}}</p>
            </div>
{{--            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">--}}
{{--                <span class="fa fa-play"></span>--}}
{{--            </a>--}}
        </div>
    </div>
</div>
<div class="container">
    <div class="booking-box">
        @if (session('success'))
            <script async="false">
                alert('We have received your booking and will be processed by us.')
            </script>
        @endif

        @if (session('errors'))
            <script>
                alert('{{ session('errors')->first() }}')
            </script>
        @endif

        <form  action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div class="row no-gutters">
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4 border-1">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Visitor Name')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="far fa-user"></span></div>
                            <input name="name" type="text" class="form-control form-control-sm form-booking" placeholder="{{__('string.Your team or Individual name')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Date In')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="far fa-calendar"></span></div>
                            <input name="date_in" type="date" class="form-control form-control-sm form-booking" placeholder="{{__('string.Visit Date')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Date Out')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="far fa-calendar"></span></div>
                            <input name="date_out" type="date" class="form-control form-control-sm form-booking" placeholder="{{__('string.Visit Date')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Visitors')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="far fa-user"></span></div>
                            <input name="visitors" type="number" class="form-control form-control-sm form-booking" placeholder="{{__('string.Visitors')}}" min="1">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Email')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="fas fa-envelope"></span></div>
                            <input name="email" type="text" class="form-control form-control-sm form-booking" placeholder="{{__('string.Email')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Phone')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="fas fa-phone"></span></div>
                            <input name="phone_number" type="text" class="form-control form-control-sm form-booking" placeholder="{{__('string.Phone')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="form-group p-4">
                        <label for="#" class="font-weight-bold text-success">{{__('string.Purpose')}}</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon mr-3"><span class="fas fa-check"></span></div>
                            <input name="purpose" type="text" class="form-control form-control-sm form-booking" placeholder="{{__('string.Purpose')}}" value="{{ request()->get('desc') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex p-4">
                    <div class="form-group d-flex w-100 border-0">
                        <div class="form-field w-100 align-items-center d-flex">
                            <button type="submit" class="form-control rounded-0 btn btn-success btn-booking">{{__('string.Booking Now')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    <div class="row align-items-center">
        <div class="col-sm-6">
            <img src="{{ asset('images/home-1.jpeg') }}" class="img-fluid">
        </div>
        <div class="col-sm-6">
            <h3 class="title">{{__('string.Cultural Acculturation')}}</h3>
            <p class="text-muted">
                {{__('string.Cultural Acculturation 1')}}
            </p>
            <p  class="text-muted">
                {{__('string.Cultural Acculturation 2')}}
            </p>
            {{-- <a href="{{ url('/events') }}" type="submit" class="rounded-0 btn btn-success btn-default-1">Upcoming Event</a> --}}
        </div>
    </div>

    <div class="divider"></div>
    <div class="text-center">
        <p class="text-muted m-0">{{__('string.Find beautiful place around Kasepuhan Sinar Resmi')}}</p>
        <h3 class="title">{{__('string.Popular Places Near Kasepuhan Sinar Resmi')}}</h3>
    </div>
</div>
<div class="row mt-5 no-gutters">
    <img src="{{ asset('images/popular-1.png') }}" class="col-sm-3">
    <img src="{{ asset('images/popular-2.png') }}" class="col-sm-3">
    <img src="{{ asset('images/popular-3.png') }}" class="col-sm-3">
    <img src="{{ asset('images/popular-4.png') }}" class="col-sm-3">
</div>
<div class="divider"></div>
<div class="container">
    <div class="text-center">
        <h3 class="title">{{__('string.Looking for original Products?')}}</h3>
    </div>
    <div class="product-list mt-5">
        <div class="row">
            @foreach (\App\Models\Product::all() as $product)
                    <div class="col-sm-2">
                        <div class="product-item mb-2">
                            <img src="{{ Storage::url($product->image) }}" height="100">
                            <div class="p-1">
                                <p class="m-0 mb-2 small">{{ $product->name }}</p>
                                <p class="m-0 font-weight-bold">Rp. {{ number_format($product->price) }}</p>
                                <small class="m-0 text-sm text-muted">Tersedia {{ $product->stock }} Pcs</small>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
<div class="divider"></div>
<footer style="background-image: url({{ asset('images/footer-bg.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p class="font-weight-bold m-0 mb-2">{{__('string.About')}}</p>
                <p class="text-muted">{{__('string.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.')}}</p>
            </div>

            <div class="col-sm-3">
                <p class="font-weight-bold m-0 mb-2">{{__('string.Information')}}</p>
                <ul class="text-muted list-group list-group-flush">
                    <li class="text-muted">
                        <a href="#">{{__('string.Events')}}</a>
                    </li>
                    <li class="text-muted">
                        <a href="#">{{__('string.Articles')}}</a>
                    </li>
                    <li class="text-muted">
                        <a href="#">{{__('string.Booking')}}</a>
                    </li>
                    <li class="text-muted">
                        <a href="#">{{__('string.Contact Us')}}</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-3">
                <p class="font-weight-bold m-0 mb-2">{{__('string.On Geopark Ciletuh')}}</p>
                <ul class="text-muted list-group list-group-flush">
                    <li class="text-muted">
                        <a href="#">{{__('string.Hotel')}}</a>
                    </li>
                    <li class="text-muted">
                        <a href="#">{{__('string.Restaurant')}}</a>
                    </li>
                    <li class="text-muted">
                        <a href="#">{{__('string.Nature')}}</a>
                    </li>
                    <li class="text-muted">
                        <a href="#">{{__('string.Campaign')}}</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-3">
                <p class="font-weight-bold m-0 mb-2">{{__('string.Have a Question?')}}</p>
                <ul class="text-muted list-group list-group-flush">
                    <li class="text-muted">
                        Sirnaresmi, Cisolok, Sukabumi Regency, Jawa Barat 43366
                    </li>
                    <li class="text-muted">
                        0266 0212233
                    </li>
                    <li class="text-muted">
                        info@sinarresmi.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="footer">Copyright ©2021 All rights reserved | This template is made by NusaPutra</div>
</body>
</html>
