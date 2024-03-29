<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{asset('css/admin.css')}}" rel="stylesheet" />
    <title>@yield('title', 'Admin Page - Online Store')</title>
    </head>

    <body>
        <div class="row g-0">
            <!-- sidebar -->
            <div class="p-3 col fixed text-white bg-dark">
                <a href="{{route('admin.home.index')}}" class="text-white text-decoration-none">
                    <span class="fs-4">Admin Panel</span>
                </a>
                <hr />
                <ul class="nav flex-column">
                    <li><a href="{{route('admin.home.index')}}" class="nav-link text-white">Admin - Home</a></li>
                    <li><a href="{{route('admin.products.index')}}" class="nav-link text-white">Admin - Products</a></li>
                    <li>
                    <a href="{{route('home.index')}}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
                    </li>
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col content-grey">
                <nav class="p-3 shadow text-end d-flex justify-content-end align-items-center">
                    <span class="profile-font mr-3">{{session('userName')}}</span>
                    <a class="nav-link active" href="{{route('profile.index')}}"><img class="img-profile rounded-circle" src="{{asset('storage/undraw_profile.svg')}}"></a>
                </nav>

                <div class="g-0 m-5">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Desarrollo web en entorno servidor - 2º DAW
                </small>
                <p>{{now()->format('d-m-Y H:i:s')}}</p>
            </div>
        </div>
        <!-- footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>