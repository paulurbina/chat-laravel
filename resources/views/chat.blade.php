<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ChatLara</title>
    <style rel="stylesheet">
        ul.messageSending {
            overflow-y: scroll;
            width: 100%;
            height: 210px; 
        }
    </style>
</head>
<body>
    
    <div class="container" id="app">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                    <li class="list-group-item active">
                            <h1>
                                Start Chat User
                            </h1>
                    </li>
                    <ul class="list-group messageSending" v-chat-scroll>
                           
                            {{-- component --}}
                            <message-chat 
                                v-for="(value, index) in chat.message" :key="index"
                                color="secondary">
                                    @{{value}}
                            </message-chat>
                            {{-- component --}}
                            
                    </ul>
                    <div class="form-group mt-1">
                            <input type="text" class="form-control" placeholder="Write Here..." v-model="message" @keyup.enter="sending">
                    </div>
            </div>
                
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>