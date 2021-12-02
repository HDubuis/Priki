<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view("home")->with(['nbDays' => 5]);
    }
}
