@extends('layouts.master')

@section('content')
    <div style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{__('string.About Us')}}</h1>
                    <p class="caps text-white">{{__('string.Kasepuhan Sinar Official led by Abah Asep Nugraha is located in Cisolok District, and is a diversity of one of the traditional villages of Kasepuhan Banten Kidul which is still preserved. Kasepuhan Sinar Official is an integral part of the cultural aspect of the Ciletuh Geopark.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('images/about-us.jpg') }}">
            </div>

            <div class="col-sm-6">
                <h3>{{__('string.History of Kasepuhan Sinar Resmi')}}</h3>
                <p class="text-muted">
                    {{__('string.History of Kasepuhan Sinar Resmi 1')}}
                </p> 

                <p class="text-muted">
                    {{__("string.History of Kasepuhan Sinar Resmi 2")}}
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-sm-6">
                <h3>{{__('string.Culture')}}</h3>
                <p class="text-muted">
                    {{__('string.Culture 1')}}
                </p>

                <p class="text-muted">
                    {{__('string.Culture 2')}}
                </p>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('images/culture.jpeg') }}">
            </div>

           
        </div>
    </div>
@stop
