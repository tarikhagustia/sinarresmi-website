@extends('layouts.master')

@section('content')
    <div style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{ $news->title }}</h1>
                    <p class="caps text-white">{{ $news->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="text-center">
            <img src="{{ Storage::url($news->image) }}" class="img-fluid" style="max-height: 400px">
        </div>
        
        {!! $news->content !!}
    </div>
@endsection
