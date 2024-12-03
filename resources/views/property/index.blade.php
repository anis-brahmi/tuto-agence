@extends('base')
@section('main')
    <div class="container">
        <h1 class="my-4">Properties for Sale</h1>
        <!-- Property Cards -->
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if ($property->image)
                            <img src="{{ asset('storage/' . $property->image) }}" class="card-img-top" alt="{{ $property->title }}">
                        @else
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Property image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->title }}</h5>
                            <p class="card-text">{{ \Str::limit($property->description, 100) }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ number_format($property->price, 2) }}</p>
                            <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $properties->links() }}
        </div>
    </div>
@endsection
