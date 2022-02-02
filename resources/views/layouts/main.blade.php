<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@section('title')Мир новостей | @show</title>



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


</head>

<body>

    <x-header></x-header>

    <main>

        <section class="py-5 text-center container">
            <div class="album py-5 bg-light">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </section>

    </main>


    <x-footer></x-footer>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
