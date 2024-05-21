<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    function __invoke($id = null)
    {
        return 'this is my id' . $id;
    }
}
