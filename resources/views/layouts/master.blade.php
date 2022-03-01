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
    @stack('css')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light navbar-t">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
           @include('layouts.nav')
        </div>
    </div>
</nav>
@yield('content')
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
                <p class="font-weight-bold m-0 mb-2">Have a Question?</p>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@stack('js')
</body>
</html>
