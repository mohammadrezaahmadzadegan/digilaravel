<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digilaravel|@section('title') onlineshop @show</title>
</head>
<body>
@includeIf('parts.header')
    @yield('content')
    @includeWhen(empty($footer),'parts.footer' )
</body>
</html>
