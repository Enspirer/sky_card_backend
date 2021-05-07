<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Porfolio;
use Illuminate\Http\Request;

class CompanyPortfolioController extends Controller
{
    public function index($id)
    {
        $companyDetails = Company::where('id',$id)->first();
        $portfolio = Porfolio::where('company_id',$id)->get();

        return view('frontend.user.portfolio.index',[
            'company_details'=> $companyDetails,
            'items' => $portfolio
        ]);
    }

    public function store(Request $request)
    {
        $details = Porfolio::VideoUpload($request->company_id,$request->video_type,$request->video_link,$request->description,$request->caption);
        return back();
    }
}
