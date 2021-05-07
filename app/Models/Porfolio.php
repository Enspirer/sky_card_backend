<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Porfolio extends Model
{
    public static function VideoUpload($company_id,$video_type,$video_link,$description=null,$caption=null)
    {
        $porfolio  = new Porfolio;
        $porfolio->company_id = $company_id;
        $porfolio->user_id = auth()->user()->id;
        $porfolio->content_type = 'Videos';
        if($video_type == 'Uploaded Video')
        {
            $porfolio->uploaded_video_link = $video_link;
        }elseif($video_type == 'Youtube Video')
        {
            $porfolio->youtube_link = $video_link;
        }
        $porfolio->video_type = $video_type;
        $porfolio->description = $description;
        $porfolio->caption = $caption;
        $porfolio->save();
        return $porfolio->id;
    }


//    public static function ImageUpload($company_id,$photos_type,$photo_link,$description=null,$caption=null)
//    {
//        $porfolio  = new Porfolio;
//        $porfolio->company_id = $company_id;
//    }
}
