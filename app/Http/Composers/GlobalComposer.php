<?php

namespace App\Http\Composers;

use App\Models\Company;
use Illuminate\View\View;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        if(auth()->user()){
            $getcompany = Company::where('user_id',auth()->user()->id)
                ->select(['id','brand_name','user_id','category'])
                ->get();
        }else{
            $getcompany = null;
        }


        $view->with('logged_in_user', auth()->user());
        $view->with('get_company',$getcompany);
    }
}
