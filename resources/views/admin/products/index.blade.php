@extends('layouts.master')

@section('content')
    <div class="container min-vh-100">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            Create New Product
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td class="text-truncate" style="max-width: 200px">{{ $product->description }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>Rp. {{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary d-inline-block">
                                Show
                            </a>

                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning d-inline-block">
                                Edit
                            </a>

                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection
