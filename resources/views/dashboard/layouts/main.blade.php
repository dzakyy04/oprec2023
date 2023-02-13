<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{ $title }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <!-- Template Main CSS File -->
    <link href="/css/dashboard.css" rel="stylesheet" />
    
    <!-- Favicon -->
    <link rel="icon" href="/img/logo.png" type="image/x-icon">

    <style>
        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #012970;
            border-color: #012970;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #012970;
        }

        .bg-dongker {
            background-color: #012970;
        }

        .square {
            height: 30px;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        a.badge:hover {
            color: white;
        }
    </style>
</head>

<body>
    @include('dashboard.layouts.header')

    @include('dashboard.layouts.sidebar')

    <main id="main" class="main">
        @yield('main')
    </main>


    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="/js/dashboard.js"></script>
</body>

</html>
