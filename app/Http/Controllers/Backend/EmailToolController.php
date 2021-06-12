<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailToolController extends Controller
{
    public function index()
    {
        return view('backend.email_tool.index');
    }
}
