@extends('layout.main')
@section('title','login')
@section('header')
<li><a href="/signup">sign up</a></li>
@endsection
@section('content')
<h1>this is login page</h1>
<form action="/form" method="POST">
@csrf
<input type="text" name="name">
<button>send</button>
</form>
@endsection
@php
    $footer = 1;
@endphp
