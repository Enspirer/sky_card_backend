<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyCard extends Model
{
    public static function visitorcount($card_id)
    {
        $cardDetails = MyCard::where('id',$card_id)->first();
        if($cardDetails->visitor_count)
        {
            $count = $cardDetails->visitor_count;
        }else{
            $count = 0;
        }

        if($cardDetails != null)
        {
            MyCard::where('id',$card_id)->update([
               'visitor_count' => $count + 1,
            ]);
            return 'updated';
        }else{
            return 'not_updated';
        }
    }
}
