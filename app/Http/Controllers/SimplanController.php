<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simplan;
use App\Models\Offerplans;

class SimplanController extends Controller
{
    public function index() {
        $simplan = Simplan::get();
        return view('simplan', ['simplan' => $simplan]);
    }

    public function create () {
        return "Create";
    }

    public function edit ($id) {
        $simplan = Simplan::find($id);
        return view('simplan', ['simplan' => $simplan]);
    }

    public function switchsave () {
        return view('switchsave');
    }

    public function offers () {
        return view('offers');
    }

    public function offerplans () {
        $offerplans = Offerplans::get();
        return view('offerplans', ['offerplans' => $offerplans]);
    }

    public function destroy ($id) {
        Simplan::destroy($id);
        return \Redirect::route('home')->with(['messsage' => 'Simplan deleted successfully']);
    }
}
