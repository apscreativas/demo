@extends('master')

@section('head')
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
@stop

@section('contenido')
    <h1>Contactame</h1>
    <p>
        Aqui se mostrará lo escrito y traído de la BD FireBase
    </p>

    <div id='messagesDiv'></div>

    <script>
        var myDataRef = new Firebase('https://apscreativas.firebaseio.com/');

        myDataRef.on('child_added', function(snapshot) {
            var message = snapshot.val();
            displayChatMessage(message.name, message.text);
        });
        function displayChatMessage(name, text) {
            $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
            $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
        };
    </script>
@stop
