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
        if($request->content_type == "Videos")
        {
            $details = Porfolio::VideoUpload($request->company_id,$request->video_type,$request->video_link,$request->description,$request->caption);

        }elseif($request->content_type == 'Images'){

            if($request->file('picture'))
            {
                $preview_fileName = time().'.'.$request->picture->getClientOriginalExtension();
                $fullURLsPreviewFile = $request->picture->move(public_path('files/preview_files'), $preview_fileName);
                $image_url = $preview_fileName;
            }else{
                $image_url = null;
            }

            $details = Porfolio::ImageUpload($request->company_id,'Upload Image',$image_url);
        }elseif ($request->content_type == 'Website Links')
        {
           Porfolio::WebsiteLink($request->company_id,$request->website,$request->caption);
        }
        return back();
    }
}
