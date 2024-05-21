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
@component('component.button',['class'=>'btn','title'=>'send now'])
@endcomponent

</form>

<br>
@if (count($oneten)<3)
<ul>
    @foreach ($oneten as $number)
        <li>{{ $number }}</li>
    @endforeach
</ul>
@elseif (count($oneten)>3)
{{'this is more 3 user'}}
@else
{{'not found'}}
@endif
<br>
@switch($day)
    @case(1)
    {{'sunday'}}
    @break

    @case(2)
    {{'monday'}}
    @break
    @case(3)
    {{'tusday'}}
    @break

    @default
{{'i dont now'}}
@endswitch




@php
   while ($item=current($oneten)) {
    echo $item;
    next($oneten);
   }
@endphp


@bold(hello)
<br>
@echotext($ra = 44; echo $ra)

@endsection
@php
    $footer = 1;
@endphp

