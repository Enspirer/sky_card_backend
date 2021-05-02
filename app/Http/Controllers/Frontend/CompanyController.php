<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Company;
use App\Models\MyCard;
use Illuminate\Http\Request;

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

        return view('frontend.user.companies.company_dashboard',[
            'companyDetails' => $companyDetails
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
        $company->save();

    }

    public function store_business_card(Request $request)
    {
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
        $cards->save();


        return redirect()->route('frontend.user.companies.design_card',[
            'id' =>$cards->id,
            'company_id' => $request->company_id
        ]);
    }

    public function design_card($id,$company_id)
    {
        return view('frontend.user.companies.business_card_designer');

    }
}
