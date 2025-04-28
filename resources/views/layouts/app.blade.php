<html>
    <head>
        <title>ToDo App Service</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>    
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">My ToDo App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="/">All Tasks</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/tasks/create">New Task</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>    