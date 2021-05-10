<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use Illuminate\Http\Request;

class MyCardHolderController extends Controller
{
    public function my_card_holder()
    {
        $card = Cards::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.my_card_holder.index',[
            'cards' => $card
        ]);
    }
}
