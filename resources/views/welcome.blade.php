<?php
namespace rato;

class newone{
    function __construct(){
        echo 569;
    }
}

$rato = 4;
function name($rato){
    echo "$rato";
}
name($rato);
echo "<br>";
namespace text2;
function name(){
    echo "text2";
}
name();
echo "<br>";
use rato\newone;
new newone;
?>
@extends('layout.main')
@section('content')
<h1>this is welcome page</h1>

@endsection
