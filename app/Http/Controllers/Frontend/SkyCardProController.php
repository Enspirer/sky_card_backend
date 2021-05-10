<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkyCardProController extends Controller
{
    public function index()
    {
        return view('frontend.sky_card_pro.skycard_pro');
    }
}
