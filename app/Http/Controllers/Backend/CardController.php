<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use Illuminate\Http\Request;
use DataTables;
class CardController extends Controller
{
    public function index()
    {
        return view('backend.cards.index');
    }

    public function getData()
    {
        $cards = Cards::all();
        return Datatables::of($cards)
            ->editColumn('status',function ($row){
                if($row->status  == 1){
                    return 'Enabled';
                }else{
                    return 'Disabled';
                }
            })
            ->addColumn('action', function($row){
                $btn1 = '<a href="'.route('admin.genres.edit',$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="'.route('admin.genres.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
}
