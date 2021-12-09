@extends('layouts.master')

@section('content')
    <div
        style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">Products</h1>
                    <p class="caps text-white">Find original products from Kasupuhan sinar resmi, we provide some product
                        make by our villagers</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="text-center">
            <h3 class="title">Looking for original Products?</h3>
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
                        <div class="product-item">
                            <img src="{{ asset($product->image) }}">
                            <div class="p-1">
                                <p class="m-0 mb-2 small">{{ $product->name }}</p>
                                <p class="m-0 font-weight-bold">{{ $product->price }}</p>
                                <small class="m-0 text-sm text-muted">Tersedia {{ $product->stock }} Pcs</small>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            {{ $products->links() }}
        </div>
    </div>
    </div>
@endsection
