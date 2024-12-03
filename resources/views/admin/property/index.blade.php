@extends('admin')

@section('title', 'Manage Properties')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">List of Properties</h1>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-primary mb-3">Add New Property</a>

        <!-- Table of properties -->
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Rooms</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->title }}</td>
                    <td>{{ Str::limit($property->description, 50) }}</td>
                    <td>{{ $property->rooms }}</td>
                    <td>${{ number_format($property->price, 2) }}</td>
                    <td>{{ $property->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this property?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $properties->links() }}
        </div>
    </div>
@endsection
