<!doctype html>
<html lang="en" translate="no">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <title>{{ $title }}</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;700&display=swap');

        :root {
            --pink: #FF6462;
            --purple: #58508C;
            --montserrat: 'Montserrat',
                sans-serif;
            --poppins: 'Poppins',
                sans-serif;
        }

        * {
            color: #00405C;
            font-family: var(--montserrat);
        }

        body {
            background-color: #eee;
        }

        .poppins {
            font-family: var(--poppins);
        }

        .pink {
            color: var(--pink) !important;
        }

        .purple {
            color: var(--purple) !important;
        }

        .bg-purple {
            background-color: var(--purple) !important;
        }

        .bg-pink {
            background-color: var(--pink) !important;
        }

        @media (max-width: 576px) {
            .footer-content {
                flex-direction: column-reverse;
                align-items: center
            }

            .links a {
                margin: 0 !important;
                padding: 0 10px !important;
            }

            .footer-content p {
                padding-top: 10px;
            }
        }
    </style>

    @yield('css')
</head>

<body>
    @include('partials.navbar')

    @yield('content')

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
