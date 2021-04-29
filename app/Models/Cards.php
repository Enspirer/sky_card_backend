<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cards extends Model
{


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
