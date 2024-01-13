<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Rental Buku | @yield('title')</title>
</head>
<style>
    .main {
        height: 100vh;
    }

    .body-content {}

    .sidebar {
        background: black;
        color: white;
    }

    .sidebar ul {
        list-style: none;
    }

    .sidebar li {
        padding: 15px;

    }

    .sidebar a {
        color: white;
        color-decoration: none;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-2">
                    <ul>
                        @if (Auth::user()->role_id == 1)
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Books</a>
                            </li>
                            <li>Ctegories</li>
                            <li>Users</li>
                            <li>Rent Log</li>
                            <li>Logout</li>
                        @else
                            <li>Profile</li>
                            <li>Logout</li>
                        @endif
                    </ul>
                </div>
                <div class="content p-5 col-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
