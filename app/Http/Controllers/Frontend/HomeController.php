<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\MyCard;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.home_page.index');
    }

    public function test_page(){
        return view('frontend.test_card_preview');
    }

    public function get_app_menifest($id)
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
          "start_url" => url('/pwa-examples/a2hs',$cardDetails->slug)
        ];

        return json_encode($out_array);
    }
}
