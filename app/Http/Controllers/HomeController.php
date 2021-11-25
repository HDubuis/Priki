<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index($nbDays=5)
    {
        return view("home")->with(['nbDays'=>$nbDays]);
    }
}
