@extends('layouts.master')

@section('content')
    <div style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">About Us</h1>
                    <p class="caps text-white">Kasepuhan Sinar Official led by Abah Asep Nugraha is located in Cisolok District, and is a diversity of one of the traditional villages of Kasepuhan Banten Kidul which is still preserved. Kasepuhan Sinar Official is an integral part of the cultural aspect of the Ciletuh Geopark.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('images/about-us.jpg') }}">
            </div>

            <div class="col-sm-6">
                <h3>History of Kasepuhan Sinar Resmi</h3>
                <p class="text-muted">
                    Sirnaresmi is one of the traditional villages in the Kasepuhan Sinar Official neighborhood. History records, this kasepuhan is a remnant or inheritance from the kingdom that once stood in Sundanese land.
                </p>

                <p class="text-muted">
                    Kasepuhan Sinar Official is one of the indigenous communities who are members of the Banten Kidul Indigenous Unity. This indigenous community is spread around Mount Halimun which is located in the area of ​​two provinces, namely West Java and Banten.
                </p>

                <p class="text-muted">
                    Ethnically, the people of kasepuhan are Urang Sunda, including the Kanekes people or the Baduy people. The daily lives of residents are colored by Kanekes traditions, habits, and customs, including the wisdom of responding to nature and the environment.
                </p>
            </div>
        </div>
    </div>
@stop
