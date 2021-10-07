<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use Illuminate\Http\Request;
use App\Models\MyCard;
class MyCardHolderController extends Controller
{
    public function my_card_holder()
    {
        $card = Cards::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.my_card_holder.index',[
            'cards' => $card
        ]);
    }

    public function manifest($id)
    {
        $cardDetails = MyCard::where('id',$id)->first();

        $iconfunction =  [
            'src' => url('icon/fox-icon.png'),
            'sizes' => '192x192',
            'type' => 'image/png',
        ];

        $out_array = [
            'background_color' => 'purple',
            'description' => 'SkyCard Card Shortcut',
            'display' => 'fullscreen',
            'icons' => [
                $iconfunction,
            ],
            'name' => $cardDetails->name,
            'short_name' => 'SkyCard',
            "start_url" =>  "/pwa-examples/a2hs/index.html"
        ];

        return json_encode($out_array);
    }
}
