@extends('layouts.master')

@section('content')
    <div style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">Kasepuhan News</h1>
                    <p class="caps text-white">Even though it is a traditional village, Kasepuhan Sinar Official does not isolate itself from the times. In Kasepuhan, electricity is already available, and even the residents are used to using cell phones. Some of the residents' houses already use bricks and cement—although there are still some that only use wood and bamboo and palm fiber as the roof..</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            {{-- Placeholder Event Card --}}
            {{-- <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/event1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Timbul Kerti Turun Besi, Timbul Kidang Turun Kujang</h5>
                        <p class="card- text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div> --}}
            @foreach ($news as $event)
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/'.$event->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-subtitle text-muted">{{ Str::limit($event->description, 100, '...') }}</p>
                            
                            <br>
                            <a href="{{ route('news.show', $event->slug) }}" class="text-sm">Read More..</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $news->links() }}
        </div>
    </div>
@endsection
