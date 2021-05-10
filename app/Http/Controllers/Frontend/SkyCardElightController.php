<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkyCardElightController extends Controller
{
    public function index()
    {
        return view('frontend.sky_card_elite.skycard_elite');
    }
}
