<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset ('public/assets/toastr/toastr.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <!-- Sidebar -->
    @include('partial.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

        <!-- Footer -->
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset ('assets/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset ('js/toastr.js') }}"></script>

        <script>
        window.Laravel = {
            sessionMessages: {
                success: @json(session('success')),
                error: @json(session('error')),
                errors: @json($errors -> all())
            }
        };
    </script>
</body>

</html>
