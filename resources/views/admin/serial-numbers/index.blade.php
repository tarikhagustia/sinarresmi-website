@extends('layouts.master')

@section('content')
    <div class="container min-vh-100">
        <a href="{{ route('admin.serial-numbers.create') }}" class="btn btn-primary">
            Create New Serial Number
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Production Date</th>
                    <th scope="col">Expiration Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serialNumbers as $serialNumber)
                    <tr>
                        <th scope="row">{{ $serialNumber->id }}</th>
                        <td>{{ $serialNumber->serial_number }}</td>
                        <td>{{ $serialNumber->product->name }}</td>
                        <td>{{ $serialNumber->production_date }}</td>
                        <td>{{ $serialNumber->expiration_date }}</td>
                        <td>
                            <a href="{{ route('admin.serial-numbers.show', $serialNumber->id) }}" class="btn btn-primary d-inline-block">
                                Show
                            </a>

                            <a href="{{ route('admin.serial-numbers.edit', $serialNumber->id) }}" class="btn btn-warning d-inline-block">
                                Edit
                            </a>

                            <form action="{{ route('admin.serial-numbers.destroy', $serialNumber->id) }}" method="POST"
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
        {{ $serialNumbers->links() }}
    </div>
@endsection
