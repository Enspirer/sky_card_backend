<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\CardTemplate;
use App\Models\Company;
use App\Models\MyCard;
use App\Models\Porfolio;
use Illuminate\Http\Request;
use Response;
class CompanyController extends Controller
{
    public function index()
    {
        $get_companies = Company::where('status',1)
            ->where('user_id',auth()->user()->id)
            ->get();
        $get_companies_df = Company::where('status',0)
            ->where('user_id',auth()->user()->id)
            ->get();
        return view('frontend.user.companies.index',[
            'get_companies' => $get_companies,
            'df_get_companies' => $get_companies_df
        ]);
    }

    public function create_business_card($id)
    {
        $companyDetails = Company::where('id',$id)
            ->where('user_id',auth()->user()->id)
            ->first();
        return view('frontend.user.companies.business_card_builder',[
            'companyDetails' => $companyDetails
        ]);
    }

    public function dashboard($id)
    {
        $companyDetails = Company::where('id',$id)
            ->where('user_id',auth()->user()->id)
            ->first();
        $cardDetails = MyCard::where('company_id',$companyDetails->id)->first();

        return view('frontend.user.companies.company_dashboard',[
            'companyDetails' => $companyDetails,
            'card_details' => $cardDetails,
        ]);
    }

    public function create()
    {
        return view('frontend.user.companies.creator');
    }

    public function store(Request $request)
    {
        $company = new Company;
        $company->email = $request->email;
        $company->brand_name = $request->brand_name;
        $company->user_id = auth()->user()->id;
        $company->address = $request->address;
        $company->phone_number = $request->phone_number;
        $company->website = $request->website;
        $company->category = $request->category;
        $company->location = $request->location;
        $company->status = 0;

        if($request->file('profile_picture'))
        {
            $preview_fileName = time().'.'.$request->profile_picture->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->profile_picture->move(public_path('files/preview_files'), $preview_fileName);
            $company->logo_img = $preview_fileName;
        }else{
            $company->logo_img = 'no_img.jpg';
        }


        $company->save();

        return redirect()->route('frontend.user.companies.dashboard',$company->id);

    }

    public function store_business_card(Request $request)
    {
        $getCompanyDetails = Company::where('id',$request->company_id)
            ->first();
        $cards = new MyCard;
        $cards->name = $request->first_name;
        $cards->user_id =auth()->user()->id;
        $cards->email = $request->email;
        $phone_numberJson = [
            'phone_number1' => $request->phone_number1,
            'phone_number2' => $request->phone_number2
        ];
        $cards->phone_number = json_encode($phone_numberJson);
        $cards->address = $request->address;
        $cards->position = $request->job_role;
        $cards->is_public = $request->card_type;
        $cards->website = $request->website;
        $cards->package = 1;
        $cards->company_id = $request->company_id;
        $cards->primary_template = 1;
        $cards->company_name = $getCompanyDetails->brand_name;
        $cards->slug = 'preview_version';
        $cards->save();






        return redirect()->route('frontend.user.companies.design_card',[
            'id' =>$cards->id,
            'company_id' => $request->company_id
        ]);
    }


    public static function generate_slug($name,$id)
    {
        $spaces = str_replace(' ', '', $name);
        $insimple = strtolower($spaces);
        return $insimple.'-'.$id;
    }

    public function design_card($id,$company_id)
    {
        $cardTempletes = CardTemplate::where('status',1)->get();
        $companyDetails = Company::where('id',$company_id)->first();
        $cardDetails = MyCard::where('id',$id)->first();
        return view('frontend.user.companies.business_card_designer',[
            'cardTempletes' => $cardTempletes,
            'companyDetails' =>$companyDetails,
            'cardDetaials' =>$cardDetails
        ]);

    }

    public function add_social_links_page($id,$company_id)
    {
        $cardDetails = MyCard::where('id',$id)->first();
        $companyDetails = Company::where('id',$company_id)->first();
        return view('frontend.user.companies.business_card_add_socialmedia_links',[
            'card_details' => $cardDetails,
            'company_details' => $companyDetails
        ]);
    }

    public function save_social_media(Request $request)
    {
        $outputArray = [
          'facebook_link' => $request->facebook_link,
          'instagram_link' => $request->instagram_link,
          'twitter_link' => $request->twitter_link,
          'linkedin_link' => $request->linkedin_link,
          'youtube_link' => $request->youtube_link,
        ];

        MyCard::where('id',$request->card_id)->update([
           'social_media_links' => json_encode($outputArray),
           'description' => $request->description
        ]);

        return redirect()->route('frontend.user.companies.publish_your_card',[$request->card_id,$request->company_id]);

    }


    public function iframe_preview($card_id,$company_id,$template_id)
    {
        $CompanyDetails = Company::where('id',$company_id)->first();
        $cardDetails = MyCard::where('id',$card_id)->first();
        $templates = CardTemplate::where('id',$template_id)->first();
        $portfolio = Porfolio::where('company_id',$company_id)->get();

        if($cardDetails){
            $get_fnameLname = explode(" ", $cardDetails->name);
        }else{
            $get_fnameLname = null;
        }

        $phone_number = json_decode($cardDetails->phone_number);

        return view('frontend.user.companies.sections.design_engine.iframe_card_preview',[
            'company_details' => $CompanyDetails,
            'card_details' => $cardDetails,
            'tempaltes' => $templates,
            'name_seperation' => $get_fnameLname,
            'phone_number' => $phone_number,
            'portfolio'=>$portfolio
        ]);
    }

    public function business_card_template_save(Request $request)
    {
        $getMyCardDetails = MyCard::where('id',$request->business_card_id)->first();
        MyCard::where('id',$request->business_card_id)
            ->update([
                'card_template' => $request->template_id,
                'slug' =>  self::generate_slug($getMyCardDetails->name,$request->business_card_id)
            ]);


        return redirect()->route('frontend.user.companies.add_social_links_page',[$request->business_card_id,$getMyCardDetails->company_id]);
    }

    public function publish_your_card($id,$company_id)
    {
        $companyDetails = Company::where('id',$company_id)->first();
        $cardDetailss = MyCard::where('id',$id)->first();

        return view('frontend.user.companies.bussiness_card_publish',[
            'companyDetails' => $companyDetails,
            'cardDetails' => $cardDetailss
        ]);
    }

    public function update_cover_photo(Request $request)
    {
        $mesage = ['finished_message'=> 'Its Working'];
        MyCard::where('id',$request->business_card_id)
            ->update(
                [
                    'cover_image' => url('files/cover_images/').'/'.$request->file_name
                ]);
        return url('files/cover_images/').'/'.$request->file_name;
    }

    public function vcardgenerator($card_id)
    {
        $cardDetils = MyCard::where('id',$card_id)->first();


        $eni = 'BEGIN:VCARD
VERSION:3.0
N:;'.$cardDetils->name.';;;
FN:'.$cardDetils->name.'
TITLE:'.$cardDetils->position.'
EMAIL;TYPE=email:'.$cardDetils->email.'
URL:https://www.skycard.com/c/sanjayasenevirathne/
END:VCARD';
        header('Content-Disposition: attachment; filename="sample.vcf"');
        header('Content-Type: text/plain'); # Don't use application/force-download - it's not a real MIME type, and the Content-Disposition header is sufficient
        header('Content-Length: ' . strlen($eni));
        header('Connection: close');

        return $eni;
    }


}
