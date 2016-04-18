<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class luxor extends Controller
{
public function sum()
{
$a=5;
$b=6;
return  ($d=$a+$b);
}
function form()
{
return view ('form');
}
function login()
{
return view ('login');
}
}
