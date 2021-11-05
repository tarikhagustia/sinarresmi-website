@extends('layouts.master')

@section('content')
    <div style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">Contact Us</h1>
                    <p class="caps text-white">Whenever you need us, we're here for you and your Information</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">Contact Us</h3>
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Your Email</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Your Question</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <button class="btn btn-success btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
