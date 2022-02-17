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
    <div class="d-flex justify-content-end mt-2">
        <a type="button" href="{{ route('taskList')}}" class="btn btn-default border border-dark"><i class="bi bi-arrow-return-left"></i></a>
        </div>
        <div class="d-flex justify-content-center">
        @if (is_countable( $tasks ) && count( $tasks ) > 0)
            <table class='table'>
                <thead>
                    <tr>
                        <th>Task</th>
                    </tr>
                </thead>
                <tbody>
                    <form method="POST">
                        {{ csrf_field() }}
                        @foreach($tasks as $task)
                        <tr class="align-middle ">
                            <th>{{$task->nombre}}</th>
                        </tr>
                        @endforeach
                    </form>
                </tbody>
            </table>
            @else
            <p>There are no tasks registered.</p>
            @endif
        </div>    
    </div>
</body>

</html>