@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{__("string.Contact Us")}}</h1>
                    <p class="caps text-white">{{__("string.Whenever you need us, we're here for you and your Information")}}</p>
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
                <h3 class="text-center">{{__("string.Contact Us")}}</h3>
                <form method="POST" action="{{ url('/contact-us') }}">
                    <div class="row justify-content-center">

                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{__("string.Your Name")}}</label>
                                <input name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>{{__("string.Your Email")}}</label>
                                <input name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>{{__("string.Your Question")}}</label>
                                <textarea name="question" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">{{__("string.Submit")}}</button>
                            <a href="https://wa.me/081213786638" class="btn btn-outline-success btn-block">{{__("string.Hubungi Via WhatsApp")}}</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
