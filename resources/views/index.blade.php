@extends('layout.main')
@section('content')
<form action="/welcome" method="POST" enctype="multipart/form-data">
@csrf
<input type="file"  name="name[]" multiple>

<button>send</button>
</form>
@endsection
@section('title','home')
