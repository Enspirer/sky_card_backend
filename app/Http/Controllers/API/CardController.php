<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AIScannedCards;
use Illuminate\Http\Request;
use App\Models\Cards;
use GoogleCloudVision\GoogleCloudVision;
use GoogleCloudVision\Request\AnnotateImageRequest;

class CardController extends Controller
{
    public function post_image(Request $request)
    {


            //convert image to base64
            $image = $request->upload_file;

        $file = base64_decode($request['upload_file']);

        $folderName = '/uploads/files/temp_cards/';
        $safeName = time().'.'.'png';
        $destinationPath = public_path() . $folderName;

        $success = file_put_contents(public_path('files/review_files/').$safeName, $file);

            //prepare request
            $request = new AnnotateImageRequest();
            $request->setImage($image);
            $request->setFeature("TEXT_DETECTION");
            $gcvRequest = new GoogleCloudVision([$request],  'AIzaSyCbkpm23jCgi-c2WfSALZAX-n0S3BAye0o');
            //send annotation request
        $response = $gcvRequest->annotate();
        $getCetails = Cards::GetText($response);
        $contact_num_st  = Cards::ScaningContactNumber_step1($getCetails);
        $email = Cards::ScaningEmail($getCetails);
        $website = null;
        $outArray = [
            'phone_number' => $contact_num_st,
            'email' => $email,
            'website'=> $website,
            'image' => url('files/review_files/'.$safeName)
        ];
        $cardDetails = new AIScannedCards;
        $cardDetails->file_path = public_path('files/review_files/').$safeName;
        $cardDetails->file_name = $safeName;
        $cardDetails->scanned_content = $getCetails;
        $cardDetails->user_id = auth()->user()->id;
        $cardDetails->json_output = json_encode($outArray);
        $cardDetails->status = 1;
        $cardDetails->save();
        return response()->json($outArray);
    }


    public static function base64_to_jpeg($base64_string, $output_file) {
        // open the output file for writing
        $ifp = fopen( $output_file, 'wb' );
        $data = explode( ',', $base64_string );
        fwrite( $ifp, base64_decode( $data[ 1 ] ) );
        fclose( $ifp );

        return $output_file;
    }
}