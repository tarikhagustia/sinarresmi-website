<x-app-layout title="Product Serial">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Create New Product Serial
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="{{ route('dashboard.product-serials.store') }}" method="POST">
                @csrf

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Product ID
                    </span>
                    <select name="product_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                    placeholder="Product ID">
                        <option value="">Select Product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('product_id')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Production Date
                    </span>
                    <input name="production_date" type="date" value="{{ old('production_date') }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Production Date" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('production_date')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Expiration Date
                    </span>
                    <input name="expiration_date" type="date" value="{{ old('expiration_date') }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Expiration Date" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('expiration_date')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Qty
                    </span>
                    <input name="qty" type="number" value="{{ old('qty') }}" min="1"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Qty" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('qty')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <button type="submit"
                    class="inset-y-0 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    Submit
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
