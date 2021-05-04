<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MyCard;
use Illuminate\Http\Request;

class MyCardController extends Controller
{
    public function index()
    {
        $myCard = MyCard::where('user_id',auth()->user()->id)
            ->get();
        return view('frontend.user.my_cards.index',[
            'my_cards' => $myCard
        ]);
    }
}
