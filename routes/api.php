<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CardController;
use App\Http\Controllers\Frontend\MyCardController;
use App\Http\Controllers\Frontend\CompanyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('user_updates', [CompanyController::class, 'update_cover_photo'])->name('cover_photo_update');


Route::group(['prefix' => 'auth'], function () {

    Route::post('login', [UserController::class, 'api_login']);
    Route::post('signup', [UserController::class, 'api_sign_up']);
    Route::post('userDetails',  [UserController::class,'userDetails']);
    Route::group(['middleware' => 'auth:api'], function() {
        Route::post('userDetails',  [UserController::class,'userDetails']);
        Route::post('upload_card',  [CardController::class,'post_image']);
        Route::post('save_cards',  [CardController::class,'save_card']);
        Route::get('logout', [UserController::class,'logout']);
    });
});