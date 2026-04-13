<!DOCTYPE html>
<html>

<head>

    <title>DevTrack</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="/dashboard">DevTrack</a>

            <div class="navbar-nav">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-link" href="/tasks">Tasks</a>
                <a class="nav-link" href="/kanban">Kanban</a>
                <a class="nav-link" href="/testreport">Test Report</a>
            </div>

        </div>
    </nav>

    <div class="container mt-4">

        @yield('content')

    </div>

</body>

</html>