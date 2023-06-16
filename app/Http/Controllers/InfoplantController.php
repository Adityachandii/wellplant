<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoplantController extends Controller
{
    public function plantProgress(Request $request) {
        return view('buyer.plant_progress');
    }
}
