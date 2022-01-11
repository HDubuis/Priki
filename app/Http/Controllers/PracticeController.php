<?php

namespace App\Http\Controllers;

use App\Models\Practice;

class PracticeController extends Controller
{

    public function index($practice)
    {
        $practice = Practice::findOrFail($practice);
        return view('practice')->with('practice', $practice);
    }
}
