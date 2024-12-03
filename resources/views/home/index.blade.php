@extends('base')

@section('main')

    <!-- Hero Section -->
    <header class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to My Website</h1>
            <p class="lead">Elegant, simple, and clean design with the Journal theme.</p>
            <a href="#about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="bi bi-gear fs-1 text-primary"></i>
                    <h4>Service 1</h4>
                    <p>Detailed description of Service 1.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-laptop fs-1 text-primary"></i>
                    <h4>Service 2</h4>
                    <p>Detailed description of Service 2.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-people fs-1 text-primary"></i>
                    <h4>Service 3</h4>
                    <p>Detailed description of Service 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
