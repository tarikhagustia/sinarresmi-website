<x-app-layout title="Product">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Product
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Product Name
                    </span>
                    <input name="name" type="text" value="{{ $product->name }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Product Name" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Category
                    </span>
                    <input name="category" type="text" value="{{ $product->category }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Category" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('category')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Description
                    </span>
                    <input name="description" type="text" value="{{ $product->description }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Description" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Image
                    </span>
                    <input name="image" type="file" value="{{ $product->image }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Image" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        SKU
                    </span>
                    <input name="sku" type="text" value="{{ $product->sku }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="SKU" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('sku')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Price
                    </span>
                    <input name="price" type="number" value="{{ $product->price }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Price" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Stock
                    </span>
                    <input name="stock" type="text" value="{{ $product->stock }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Stock" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('stock')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Status
                    </span>
                    <input name="status" type="text" value="{{ $product->status }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Status" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('status')
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
