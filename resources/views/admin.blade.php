<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Add any CSS files like Bootstrap, Admin Styles, or other -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar">
                <h2>Admin Panel</h2>
                <ul class="list-unstyled">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="{{ route('admin.properties.index')  }}">Properties</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Admin Panel</a>
                <!-- Add any additional navbar content here, like user info or logout -->
            </nav>

            <div class="container">
                <!-- Content will be injected here -->
                @yield('content')
            </div>
        </div>
    </div>
</div>

<!-- Add any JS scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
