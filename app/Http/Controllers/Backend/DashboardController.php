<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AIScannedCards;
use App\Models\Auth\User;
use DB;
use Carbon\Carbon;
/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $aiDetails =AIScannedCards::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as calls'))
            ->groupBy('date')
            ->get();

        $aicalls = count(AIScannedCards::all());
        $activeUserCont = count(User::all());



        return view('backend.dashboard',[
            'calls_details' => $aiDetails,
            'all_calls' => $aicalls,
            'user_count' => $activeUserCont
        ]);
    }
}
