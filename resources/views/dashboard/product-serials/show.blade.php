<x-app-layout title="Serial Number">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            ID: {{ $productSerial->id }}
        </h2>
        <a href="{{ route('dashboard.product-serials.generate-sn', $productSerial->id) }}" class="inline bg-purple-600 px-3 py-2 rounded-md text-white no-underline">
            Generate Serial Number
        </a>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="mt-5 col-12 d-flex flex-column justify-content-center align-items-center">
                <p>ID: {{ $productSerial->id }}</p>
                <p>Product ID: {{ $productSerial->product_id }}</p>
                <p>Production Date: {{ $productSerial->production_date }}</p>
                <p>Expiration Date: {{ $productSerial->expiration_date }}</p>
                <p>Qty: {{ $productSerial->qty }}</p>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center">
                <a href="{{ route('dashboard.product-serials.index') }}" class="btn btn-primary d-inline">Back</a>

                <a href="{{ route('dashboard.product-serials.edit', $productSerial->id) }}" class="btn btn-warning d-inline">Edit</a>

                <form action="{{ route('dashboard.product-serials.destroy', $productSerial->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>

        @include('dashboard.product-serials.components.serial-numbers-table')
    </div>
</x-app-layout>
