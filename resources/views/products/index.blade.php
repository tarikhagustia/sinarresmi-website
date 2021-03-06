@extends('layouts.master')

@section('content')
    <div
        style="background: url({{ asset('images/hero-bg-2.png') }}) rgba(0, 0, 0, 0.5);background-blend-mode: multiply;  background-repeat: no-repeat; background-size: cover">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">{{__("string.Products")}}</h1>
                    <p class="caps text-white">{{__("string.Find original products from Kasepuhan sinar resmi, we provide some product make by our villagers")}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="text-center">
            <h3 class="title">{{__("string.Looking for original Products?")}}</h3>
        </div>
        <div class="product-list mt-5">
            <div class="row">
                {{-- Placeholder Product Card --}}
                {{-- <div class="col-sm-2">
                    <div class="product-item">
                        <img src="{{ asset('images/sayur.jpeg') }}">
                        <div class="p-1">
                            <p class="m-0 mb-2 small">Sayur Mayur 500gr</p>
                            <p class="m-0 font-weight-bold">Rp. 20.000</p>
                            <small class="m-0 text-sm text-muted">Tersedia 10 Pcs</small>
                        </div>
                    </div>
                </div> --}}
                @foreach ($products as $product)
                    <div class="col-sm-2">
                        <div class="product-item mb-2">
                            <img src="{{ Storage::url($product->image) }}" height="100">
                            <div class="p-1">
                                <p class="m-0 mb-2 small">{{ $product->name }}</p>
                                <p class="m-0 font-weight-bold">Rp. {{ number_format($product->price) }}</p>
                                <small class="m-0 text-sm text-muted">{{ __('string.available')}} {{ $product->stock }} Pcs</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </div>
    </div>
@endsection
