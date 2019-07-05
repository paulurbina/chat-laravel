<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ChatLara</title>
</head>
<body>
    
    <div class="container" id="app">
        <div class="row">
                <ul class="list-group col-md-4 offset-md-4">
                        <li class="list-group-item active">
                            <h1>
                                Start Chat User
                            </h1>
                        </li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>

                        <div class="form-group mt-1">
                            <input type="text" class="form-control" placeholder="Write Here...">
                        </div>
                </ul>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>