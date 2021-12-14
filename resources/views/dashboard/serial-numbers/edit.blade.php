<x-app-layout title="Serial Numbers">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Serial Numbers
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="{{ route('dashboard.serial-numbers.update', $serialNumber->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Serial Number
                    </span>
                    <input name="serial_number" type="text" value="{{ $serialNumber->serial_number }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Serial Number" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('serial_number')
                            {{ $message }}
                        @enderror
                    </span>
                </label>

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Product Serial ID
                    </span>
                    <input name="product_serial_id" type="text" value="{{ $serialNumber->product_serial_id }}"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Product ID" />
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        @error('product_serial_id')
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
