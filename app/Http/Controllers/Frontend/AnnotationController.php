<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use GoogleCloudVision\GoogleCloudVision;
use Illuminate\Http\Request;
use GoogleCloudVision\Request\AnnotateImageRequest;

class AnnotationController extends Controller
{
    public function displayForm()
    {
        dd('sss');
    }


    public function annotateImage(Request $request)
    {
        if($request->file('image')){
            //convert image to base64
            $image = base64_encode(file_get_contents($request->file('image')));

            //prepare request
            $request = new AnnotateImageRequest();
            $request->setImage($image);
            $request->setFeature("TEXT_DETECTION");
            $gcvRequest = new GoogleCloudVision([$request],  'AIzaSyCbkpm23jCgi-c2WfSALZAX-n0S3BAye0o');
            //send annotation request
            $response = $gcvRequest->annotate();

            dd($response);



        }
    }
}
