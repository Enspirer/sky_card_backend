<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyInboxController extends Controller
{
    public function index()
    {
        return view('frontend.user.companies.company_inbox');
    }

}
