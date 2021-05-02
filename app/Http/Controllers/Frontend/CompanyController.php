<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Company;
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

    public function create_business_card()
    {
        return view('frontend.user.companies.business_card_builder');
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
        $cards = new Cards;
        $cards->name = $request->first_name.' '.$request->last_name;
        $phone_numberJson = [
            'phone_number1' => $request->phone_number1,
            'phone_number2' => $request->phone_number2
        ];
        $cards->phone_number = json_encode($phone_numberJson);
        $cards->fax_number = $request->fax_number;
        $cards->website = $request->website;
        $cards->email = $request->email;
        $cards->job_role = $request->job_role;
        $cards->card_type = $request->card_type;
        $cards->city = $request->city;
        $cards->user_id =$request->user_id;
        $cards->save();
        return back();
    }
}
