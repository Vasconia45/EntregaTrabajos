<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TaskList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <nav class="col-lg-8 navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class=" navbar-brand" href="/">Tasks</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 170px;">
                            <li class="nav-item"><a href="{{ route('listTask')}}" class="nav-link">Tasks List</a></li>
                            <li class="nav-item"><a href="{{ route('addTaskView')}}" class="nav-link">Add Tasks</a></li>
                            <li class="nav-item"><a href="{{ route('trashTask')}}" class="nav-link">Delete tasks</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>    
    </div>
</body>

</html>