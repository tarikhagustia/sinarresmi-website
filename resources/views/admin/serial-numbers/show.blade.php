@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-5 col-12 d-flex flex-column justify-content-center align-items-center">
                {!! $qrCode !!}
                <p>ID: {{ $serialNumber->id }}</p>
                <p>Serial Number: {{ $serialNumber->serial_number }}</p>
                <p>Product Name: {{ $serialNumber->product->name }}</p>
                <p>Production Date: {{ $serialNumber->production_date }}</p>
                <p>Expiration Date: {{ $serialNumber->expiration_date }}</p>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center">
                <a href="{{ route('admin.serial-numbers.index') }}" class="btn btn-primary d-inline">Back</a>

                <a href="{{ route('admin.serial-numbers.edit', $serialNumber->id) }}" class="btn btn-warning d-inline">Edit</a>

                <form action="{{ route('admin.serial-numbers.destroy', $serialNumber->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
