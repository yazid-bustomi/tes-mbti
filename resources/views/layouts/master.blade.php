<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tes MBTI - ITB Yadika Pasuruan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @yield('style')
</head>

<body>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary"><img src="{{ asset('assets/logo-itb.png') }}" alt="logo-itb" srcset=""
                        class="me-3">MBTI ITB</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('user-home') }}"
                        class="nav-item nav-link {{ Request::routeIs('user-home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('user-question') }}"
                        class="nav-item nav-link {{ Request::routeIs('user-question') ? 'active' : '' }}">Tes MBTI</a>
                    @auth
                        @if ($userResult->isNotEmpty())
                            <a href="{{ route('result.index') }}"
                                class="nav-item nav-link {{ Request::routeIs('result.index') ? 'active' : '' }}">Hasil</a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ route('user.index') }}"
                                class="nav-item nav-link {{ Request::routeIs('user.index') ? 'active' : '' }} ">Manajemen</a>
                        @endif
                        @if (Auth::user()->role == 'mahasiswa')
                        <a href="{{ route('account.index') }}"
                        class="nav-item nav-link {{ Request::routeIs('account.index') ? 'active' : '' }} ">Profile</a>
                        @endif
                        
                    @endauth
                </div>
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="btn btn-danger rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0"><i
                                class="fa fa-sign-out-alt  me-1"></i>Logout</button>
                    </form>
                @else
                    {{-- <a href="{{ route('login') }}"
                        class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0"><i
                            class="fa fa-sign-in-alt  me-1"></i>Login
                    </a> --}}

                    <button id="loginButton" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">
                        <i class="fa fa-sign-in-alt me-1"></i> Login
                    </button>
                @endif
            </div>
        </nav>

        @yield('header-start')
    </div>

    @yield('content')

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body">
                        <a href="https://github.com/yazid-bustomi" target="_blank" class="text-white">
                            Copyright <i class="fas fa-copyright text-light me-1"></i>YazidBustomi | 2024</a>
                    </span>
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i>
    </a>

    @yield('script')

    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Silahkan Login',
                html: `
            <form id="loginForm" method="POST">
                @csrf
                <div class="form-group">
                    <input id="username" class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group mt-3">
                    <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
            </form>`,
                showCancelButton: true,
                confirmButtonText: 'Login',
                cancelButtonText: 'Cancel',
                focusConfirm: false,
                preConfirm: () => {
                    const username = document.getElementById('username').value;
                    const password = document.getElementById('password').value;
                    if (!username || !password) {
                        Swal.showValidationMessage('Please enter both username and password');
                        return false;
                    }
                    return {
                        username: username,
                        password: password
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('loginForm');
                    form.action = "{{ route('login') }}";
                    form.method = "POST";
                    form.submit(); // Submit the form
                }
            });
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
