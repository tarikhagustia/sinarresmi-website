@extends('layouts.master')

@section('content')
    <div class="container">
        <form action="{{ route('dashboard.serial-numbers.update', $serialNumber->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input type="text" class="form-control" id="serial_number" name="serial_number" value="{{ $serialNumber->serial_number }}">
            </div>

            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="search" class="form-control" id="product_id" name="product_id" value="{{ $serialNumber->product_id }}">
            </div>

            <div class="form-group">
                <label for="production_date">Production Date</label>
                <input type="date" class="form-control" id="production_date" name="production_date" value="{{ $serialNumber->production_date }}">
            </div>

            <div class="form-group">
                <label for="expiration_date">Expiration Date</label>
                <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ $serialNumber->expiration_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
