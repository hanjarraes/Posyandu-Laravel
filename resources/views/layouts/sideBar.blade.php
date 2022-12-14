<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>

<body>
    <main>
        <div class="d-flex flex-column flex-shrink-0 bg-light custom-sidebar">
            <a href="/dashboard" class="d-flex justify-content-center" style="font-size: 28px;" title="Icon-only"
                data-bs-toggle="tooltip" data-bs-placement="right">
                <img src="img/output-onlinegiftools.gif" alt="icon" width="100">
            </a>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ $title == 'dasboard' ? 'active' : '' }}  py-3 border-bottom"
                        style="font-size: 28px;" aria-current="page" title="Home" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="ri-home-3-line"></i>
                    </a>
                </li>
                <li>
                    <a href="/posyanduSummary"
                        class="nav-link py-3 border-bottom {{ $title == 'posyanduSummary' ? 'active' : '' }} "
                        title="Dashboard" style="font-size: 28px;" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="ri-hospital-line"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link py-3 border-bottom {{ $title == 'home' ? 'active' : '' }} "
                        title="Orders" style="font-size: 28px;" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="ri-user-line"></i>
                    </a>
                </li>
            </ul>
            <div class="border-top d-flex justify-content-center">
                <a href="/" class="nav-link py-3" title="Dashboard" style="font-size: 28px;"
                    data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="ri-logout-box-line"></i>
                </a>
            </div>
        </div>

        @yield('container')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
