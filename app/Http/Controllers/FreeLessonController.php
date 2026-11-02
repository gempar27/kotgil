<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeLessonController extends Controller
{
    public function index() {
        return view('app.lesson.index');
    }
}
