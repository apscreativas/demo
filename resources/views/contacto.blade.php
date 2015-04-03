@extends('master')

@section('head')
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
@stop

@section('contenido')
<h1>Contactame</h1>
<p>
  Aqui se escribe el data que se almacena en la BD.
</p>

<input type='text' id='nameInput' placeholder='Name'>
<input type='text' id='messageInput' placeholder='Message'>

<script>
    var myDataRef = new Firebase('https://apscreativas.firebaseio.com/');
    $('#messageInput').keypress(function (e) {
        if (e.keyCode == 13) {
            var name = $('#nameInput').val();
            var text = $('#messageInput').val();
            myDataRef.push({name: name, text: text});
            $('#messageInput').val('');
        }
    });

</script>
@stop
