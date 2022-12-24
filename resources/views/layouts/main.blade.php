<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

        <link rel="stylesheet" href="/css/styles.css">

        <title>@yield('title') Agendamentos YellowIpe</title>

    </head>
    <body>

        <header id="header">
            <nav class="navbar navbar-expand navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/patients" class="nav-link">Patients</a>
                    </li>
                    <li class="nav-item">
                        <a href="/doctors" class="nav-link">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register-user" class="nav-link">Register User</a>
                    </li>
                    <li class="nav-item">
                        <a href="/make-appointment" class="nav-link">Make Appointment</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    @if (session('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('msg')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            Agendamentos YellowIpe &copy; 2022
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.table').DataTable();
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>
