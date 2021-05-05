<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MyCard;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CardTemplate;
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

    public function view_card($slug)
    {
        $cardDetails = MyCard::where('slug',$slug)->first();
        $CompanyDetails = Company::where('id',$cardDetails->company_id)->first();
        $templates = CardTemplate::where('id',$cardDetails->card_template)->first();


        if($cardDetails){
            $get_fnameLname = explode(" ", $cardDetails->name);
        }else{
            $get_fnameLname = null;
        }

        $phone_number = json_decode($cardDetails->phone_number);

        return view('frontend.card_view.index',[
            'company_details' => $CompanyDetails,
            'card_details' => $cardDetails,
            'tempaltes' => $templates,
            'name_seperation' => $get_fnameLname,
            'phone_number' => $phone_number
        ]);

    }
}
