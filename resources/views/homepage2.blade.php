<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile's Dashboard</title>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ELEMENTARY SCHOOL</h1>
@stop


</head>
<body>

@section('content')
    <p>Welcome to this cool admin panel.</p>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


</body>

@section('js')
    <script> console.log('Hi!'); </script>
@stop
    

</html>