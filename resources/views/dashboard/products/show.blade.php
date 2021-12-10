<x-app-layout title="Product">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
           {{ $product->name }}
        </h2>


        <div class="bg-white col-12 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('storage/' . $product->image) }}" alt="product image">
            <p>Name: {{ $product->name }}</p>
            <p>Category: {{ $product->category }}</p>
            <p>Description: {{ $product->description }}</p>
            <p>SKU: {{ $product->sku }}</p>
            <p>Price: Rp. {{ $product->price }}</p>
            <p>Stock: {{ $product->stock }}</p>
        </div>

        <div class="col-12 d-flex justify-content-center align-items-center">
            <a href="{{ route('dashboard.products.index') }}" class="btn btn-primary d-inline">Back</a>

            <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-warning d-inline">Edit</a>

            <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
