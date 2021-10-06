<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SkyPromoOrders;
use Illuminate\Http\Request;

class SkyPromoController extends Controller
{
    public function index()
    {
        return view('frontend.user.sky_promo.index');
    }

    public function store(Request $request)
    {

        if($request->file('email_attached'))
        {
            $preview_fileName = time().'.'.$request->email_attached->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->email_attached->move(public_path('files/email_promo'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        }
        $email_order = new SkyPromoOrders;
        $email_order->name = $request->name;
        $email_order->attached_file = $image_url;
        $email_order->description = $request->description;
        $email_order->message = $request->message;
        $email_order->user_id = auth()->user()->id;
        $email_order->email_type = 'attached_image';
        $email_order->status = 'pending';
        $email_order->save();
        return back();
    }
}
