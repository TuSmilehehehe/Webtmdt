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

    function chucnangkimngoc()
    {
        echo"chuc nang kimngoc";
    }

    function chucnangNhi()
    {
        echo"chuc nang Nhi :D";
    }

    function camtu()
    {
        echo"camtu :D";
    }
    function tranthikimngoc()
    {
        echo"hí hí";
    }
    
}
