<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MyCard;
use App\Models\Porfolio;
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

    public function edit($id)
    {
        $cardDetails = MyCard::where('id',$id)->first();
        $templates = CardTemplate::all();
        $companyDetails = Company::where('id',$cardDetails->company_id)->first();

        return view('frontend.user.my_cards.edit',[
            'cardDetails' => $cardDetails,
            'templates' => $templates,
            'companyDetails' =>$companyDetails
        ]);
    }

    public function view_card($slug)
    {
        $cardDetails = MyCard::where('slug',$slug)->first();
        $CompanyDetails = Company::where('id',$cardDetails->company_id)->first();
        $templates = CardTemplate::where('id',$cardDetails->card_template)->first();
        $portfolio = Porfolio::where('company_id',$cardDetails->company_id)->get();

        $status = MyCard::visitorcount($cardDetails->id);
        if($cardDetails){
            $get_fnameLname = explode(" ", $cardDetails->name);
        }else{
            $get_fnameLname = null;
        }

        $phone_number = json_decode($cardDetails->phone_number);

        return view('frontend.card_view.index',[
            'portfolio' => $portfolio,
            'company_details' => $CompanyDetails,
            'card_details' => $cardDetails,
            'tempaltes' => $templates,
            'name_seperation' => $get_fnameLname,
            'phone_number' => $phone_number
        ]);

    }
}
