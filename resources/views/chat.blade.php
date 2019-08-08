<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row" id="app">

        <div class="offset-md-4 col-4">

            <ul class="list-group">

                <li class="list-group-item active">Chat Room</li>
                <message-component v-for="value in chat.message">
                    @{{ value }}
                </message-component>

            </ul>
            <input type="text" class="form-control" placeholder="Escreve sua mensagem..." v-model="message"
                   @keyup.enter="send">

        </div>

    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
