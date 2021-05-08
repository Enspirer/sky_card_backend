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
            preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $video_link, $matches);
            $porfolio->youtube_link = $matches[0];
        }
        $porfolio->video_type = $video_type;
        $porfolio->description = $description;
        $porfolio->caption = $caption;
        $porfolio->save();
        return $porfolio->id;
    }



    public static function ImageUpload($company_id,$photos_type,$photo_link,$description=null,$caption=null)
    {
        $porfolio  = new Porfolio;
        $porfolio->company_id = $company_id;
        $porfolio->user_id = auth()->user()->id;
        $porfolio->photos_type = $photos_type;
        $porfolio->content_type = 'Images';
        $porfolio->photo_link = url('files/preview_files/').'/'.$photo_link;
        $porfolio->description = $description;
        $porfolio->caption = $caption;
        $porfolio->save();
        return $porfolio->id;
    }

    public static function WebsiteLink($company_id,$website_link,$caption,$description=null)
    {
        $porfolio  = new Porfolio;
        $porfolio->company_id = $company_id;
        $porfolio->user_id = auth()->user()->id;
        $porfolio->content_type = 'Website Links';
        $porfolio->website_links = $website_link;
        $porfolio->caption = $caption;
        $porfolio->description = $description;
        $porfolio->save();
        return $porfolio->id;
    }
}
