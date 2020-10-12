@extends('layouts.layout_header')
@section('navigat')
<a href="/" class="masthead-brand logo" style="color:#bf2e1a">GetJob</a>
<nav class="nav nav-masthead justify-content-rigth">
  <a class="nav-link active" href="/">Соискателям</a>
  <a class="nav-link" href="/employer">Работодателям</a>
  <a class="nav-link" href="{{route('login')}}">Войти</a>
</nav>
@endsection
