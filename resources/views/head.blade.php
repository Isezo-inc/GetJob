<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title-block')</title>
  @yield('style')
  <link rel = "stylesheet" href="/css/enterTheSystem.css">
</head>
<body>
  @yield('content')
@extends('auth')
</body>
</html>
