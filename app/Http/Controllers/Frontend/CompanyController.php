<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $get_companies = Company::where('status',1)->get();
        $get_companies_df = Company::where('status',0)->get();

        return view('frontend.user.companies.index',[
            'get_companies' => $get_companies,
            'df_get_companies' => $get_companies_df
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
}
