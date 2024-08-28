<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakController extends Controller
{
public function about()
{
   return view("about");
}
public function service()
{
    return view('service');
}
public function project()
{
    return view('project');
}
public function contact()
{
    return view('contact');
}

}
