@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{ __('string.Cultural Activities') }}</h1>
                    <p class="caps text-white">
                        {{ __("string.Events Description") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row my-5 text-center">
            <div class="col">
                <h3>{{ __('string.Cultural Activities In Kasepuhan Sinar Resmi') }}</h3>
            </div>
        </div>
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
            @foreach ($events as $event)
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $event->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="small text-muted m-0">{{ $event->date_start }} to {{ $event->date_end }}</p>
                            @if (LaravelLocalization::getCurrentLocale() == 'en')
                                <p class="card-subtitle text-muted">{{ Str::limit($event->description_en, 100, '...') }}</p>
                            @else
                                <p class="card-subtitle text-muted">{{ Str::limit($event->description, 100, '...') }}</p>
                            @endif

                            <p class="card-subtitle badge badge-primary text-white">{{ $event->status }}</p>
                            <br>
                            <a href="{{ url('/?desc=I want to join ' . $event->title) }}"
                                class="btn btn-primary mt-2">Register</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $events->links() }}
        </div>
    </div>
@endsection
