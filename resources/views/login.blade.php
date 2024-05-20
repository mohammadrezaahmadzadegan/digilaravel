@extends('layout.main')
@section('content')
<h1>this is login page</h1>
<form action="/form" method="POST">
@csrf
<input type="text" name="name">
<button>send</button>
</form>
@endsection
