<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkyCardCloubController extends Controller
{
    public function index()
    {
        return view('frontend.skycard_club.index');
    }
}
