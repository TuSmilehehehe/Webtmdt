<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
    //
    function vidu()
    {
        return view("vidu1");
    }
    function chucnangNhi()
    {
        echo "chức năng Nhi :D";
    }
}
