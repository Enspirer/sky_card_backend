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
        $cogmanet = 'WÜRTH Rohan Amirthiah Managing Director Wurth Lanka Private Limited # 375/B, High Level Road, Makumbura, Pannipitiya. T+ 9411- 2894930 F+ 9411-2894955 M+94 777 328880 rohan.amirthiah@wurth.k, www.eshop.wurth.Ik WÜRTH Udanie Jayasinghe Digital Marketing Specialist Wurth Lanka Private Limited # 375/B, High Level Road, Makumbura, Pannipitiya. T +9411 - 2894930 F +9411 - 2894955 M +94 701581813 udanie. jayasinghe@wurth.lk, www.eshop.wurth.k wUR 20';





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
            $getCetails = self::GetText($response);
        }


        $contact_num_st  = self::ScaningContactNumber_step1($getCetails);
        $email = self::ScaningEmail($getCetails);
        $website = self::ScaningWebsite($getCetails);

        $outArray = [
          'phone_number' => $contact_num_st,
          'email' => $email,
          'website'=> $website
        ];

        dd($outArray);







    }



    public static function ScaningEmail($string)
    {
        $pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
        preg_match_all($pattern, $string, $matches);
        return $matches[0];
    }

    public static function ScaningContactNumber_step1($string)
    {
        $pattern = '#([0-9]{3}\s*\([0-9]{3}\)\s*[0-9]{4})#';
        preg_match_all($pattern, $string, $matches);
        if(count($matches[0]) == 0)
        {
            $new_str = str_replace(' ', '', $string);
             preg_match_all('/(\d{3}|\(\d{3}\)|\d{3}-)?\d{4}[.\s]?\d{2}[.\s]?\d{2}[.\s]?\d{3}/', $new_str, $newt);

             if(count($newt[0]) == 0)
             {
                 $removedash = str_replace('-', '', $string);

                 preg_match_all('/[-\s]?[0–9]{4}/',$string,$details);
                 return $details[0];
             }else{
                 return $newt[0];
             }

        }else{
            return $matches[0];
        }
    }

    public static function ScaningContactNumber_step2($string)
    {

    }

    public static function ScaningAddress($string)
    {
        $pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
        preg_match_all($pattern, $string, $matches);
        return $matches[0];
    }

    public static function ScaningWebsite($string)
    {
        preg_match_all('(?:(?:https?|ftp):\/\/)?[\w/\-?=%.]+\.[\w/\-&?=%.]+', $string, $mataches);
        return $mataches[0];
    }

    public static function GetText($response)
    {
        if($response)
        {
            foreach ($response as $responceT)
            {
                foreach ($responceT as $anonteResult){
                    return $anonteResult->fullTextAnnotation->text;
                }
            }
        }
    }
}
