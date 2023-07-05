<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Writedit Solution</title>

    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


</head>

<body>
    <h1>Contact Message</h1>
    <p> Name: {{ $details['name'] }}</p>
    <p> Email: {{ $details['email'] }}</p>
    <p> Subject: {{ $details['subject'] }}</p>
    <p> Message: {{ $details['message'] }}</p>

</body>

</html>
