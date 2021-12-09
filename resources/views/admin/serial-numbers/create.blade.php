@extends('layouts.master')

@section('content')
    <div class="container">
        <form action="{{ route('admin.serial-numbers.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="text" class="form-control" id="product_id" name="product_id" value="{{ old('product_id') }}">
            </div>

            <div class="form-group">
                <label for="production_date">Production Date</label>
                <input type="date" class="form-control" id="production_date" name="production_date" value="{{ old('production_date') }}">
            </div>

            <div class="form-group">
                <label for="expiration_date">Expiration Date</label>
                <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}">
            </div>

            <div class="form-group">
                <label for="product_count">Product Count</label>
                <input type="number" class="form-control" id="product_count" name="product_count" value="{{ old('product_count') }}" min="1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
