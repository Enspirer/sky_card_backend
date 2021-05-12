<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use App\Models\ContactUsLeeds;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(Request $request)
    {
        $contackDetails = new ContactUsLeeds;
        $contackDetails->name = $request->name;
        $contackDetails->company_name = $request->company_name;
        $contackDetails->email_address = $request->email;
        $contackDetails->contact_number = $request->contact_number;
        $contackDetails->message = $request->message;
        $contackDetails->status = 'Pending';
        $contackDetails->save();

        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }
}
