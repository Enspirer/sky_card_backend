<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EmailBase;
use App\Models\SkyPromoOrders;
use Illuminate\Http\Request;
use DataTables;

class EmailToolController extends Controller
{
    public function index()
    {
        return view('backend.email_tool.index');
    }

    public function add_email_to_bulk(Request $request)
    {
        $emailbase = new EmailBase;
        $emailbase->name = $request->name;
        $emailbase->email = $request->email;
        $emailbase->description = $request->description;
        $emailbase->save();
        return back();
    }

    public function getTableDetails()
    {
        $cards = EmailBase::all();
        return Datatables::of($cards)
            ->addColumn('action', function($row){
                $btn1 = '<a href="" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = ' <a href="" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }


    public function getEmailOrderTableDetails()
    {
        $cards = SkyPromoOrders::all();
        return Datatables::of($cards)
            ->addColumn('action', function($row){
                $btn1 = '<a href="'.route('admin.emailtool.email_orders.show',$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-eye"></i> Open </a>';
                $btn2 = ' <a href="" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Trash </a>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function open_order($id)
    {
        $orderDetails = SkyPromoOrders::where('id',$id)->first();
        return view('backend.email_tool.sky_promo_request.show',[
            'order_details' => $orderDetails
        ]);
    }

    public function email_orders()
    {

        return view('backend.email_tool.sky_promo_request.index');
    }

}
