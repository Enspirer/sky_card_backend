<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MyCard;
use Illuminate\Http\Request;

class MyCardsController extends Controller
{
    public function index()
    {
        $myCards = MyCard::where('user_id',auth()->user()->id)->get();
        return response()->json();
    }
}
