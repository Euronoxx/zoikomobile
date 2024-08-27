<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simplan;
use App\Models\Phones;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $simplan = Simplan::get();
        $phones = Phones::get();
        return view('home', ['simplans' => $simplan, 'phones' => $phones]);
    }
}
