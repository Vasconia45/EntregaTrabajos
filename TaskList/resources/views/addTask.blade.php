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
    <div>
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" data-bs-dismiss="alert" class="btn-close" aria-label="Close"></button>
            {{ Session::get('success') }}
        </div>
        @endif
    </div>
    <div class="container">
        <div class="d-flex justify-content-center mt-4">
            <div class="card col-lg-4">
                <div class="card-header">
                    New task
                </div>
                <div class="card-body">
                    <form role="form" action="{{ route('addList')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="">
                            <span>Task</span>
                            <input type="text" id="task" name="task" class="form-control">
                        </div>
                        <div class="d-flex mt-2">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-default border border-dark"><i class="bi bi-plus"></i>Add Task</button>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a type="button" href="{{ route('taskList')}}" class="btn btn-default border border-dark"><i class="bi bi-arrow-return-left"></i>Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>