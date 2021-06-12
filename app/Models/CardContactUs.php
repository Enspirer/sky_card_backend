<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardContactUs extends Model
{
    public static function create_leed($name,$email,$user_id,$message,$card_id)
    {
        $card_contact_us = new CardContactUs();
        $card_contact_us->name = $name;
        $card_contact_us->email = $email;
        $card_contact_us->user_id = $user_id;
        $card_contact_us->message = $message;
        $card_contact_us->card_id = $card_id;
        $card_contact_us->save();
        return $card_contact_us->id;
    }
}
