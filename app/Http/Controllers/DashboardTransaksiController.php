<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransaksiController extends Controller
{
    public function index() {
        return view('dashboard.transaction.index');
    }
}
