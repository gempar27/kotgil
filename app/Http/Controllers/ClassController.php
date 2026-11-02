<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        return view('app.classes.index');
    }

    public function show(){
        return view('app.classes.show');
    }
}
