<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {background-color:#14b8a6;}
    header {font-family:monospace; font-size:250%;}
    div {background-color:grey; border-radius:25px;}
    navbar{font-family:monospace; font-size:180%; color:red;}
    main {font-family:monospace; font-size:150%;}
    footer {font-family:monospace; font-size:150%; text-align:right;}
    </style>
    <title>@yield('title')</title>
</head>
<body>
<div>
<br>
    <header><center><h1>
    @section('header')
    Encabezado
    @show
</h1></center></header>
<br>
</div>
<br>