<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\AnnotationController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\MyCardController;
use App\Http\Controllers\Frontend\SkyDailyController;
use App\Http\Controllers\Frontend\CardExplorerController;
use App\Http\Controllers\Frontend\SkyCardCloubController;
use App\Http\Controllers\Frontend\CompanyInboxController;
use App\Http\Controllers\Frontend\CompanyPortfolioController;
use App\Http\Controllers\Frontend\SkyCardElightController;
use App\Http\Controllers\Frontend\SkyCardProController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\SkyConnectController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/sky-daily', [SkyDailyController::class, 'index'])->name('sky_daily');
Route::get('/card-explorer', [CardExplorerController::class, 'index'])->name('card_explorer');
Route::get('/sky-card-club', [SkyCardCloubController::class, 'index'])->name('sky_card_club');
Route::get('/sky-card-elite', [SkyCardElightController::class,'index'])->name('sky_card_elite');
Route::get('/sky-card-pro', [SkyCardProController::class,'index'])->name('sky_card_pro');
Route::get('/sky-card-pricing', [PricingController::class,'index'])->name('sky_card_pricing');
Route::get('/sky-connect',[SkyConnectController::class,'index'])->name('sky_card_connect');
Route::get('/contact', [ContactController::class, 'index'])->name('sky_card_contact');
Route::post('/contact_controller',[ContactController::class,'send'])->name('contact_us');

Route::get('c/{slug}', [MyCardController::class, 'view_card'])->name('view_card');


Route::get('card_preview', [HomeController::class, 'test_page'])->name('test_page');
Route::post('/annotate', [AnnotationController::class,'annotateImage'])->name('image_scanning');

Route::get('companiesq/vcardgenerator/{card_id}', [CompanyController::class, 'vcardgenerator'])->name('companies.vcardgenerator');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {

        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // Company Controller
        Route::get('my_cards',[MyCardController::class,'index'])->name('my_cards');
        Route::get('my_cards/{card_id}',[MyCardController::class,'edit'])->name('my_cards.edit');

        //Company Page
        Route::get('companies', [CompanyController::class, 'index'])->name('companies');
        Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
        Route::post('companies/store', [CompanyController::class, 'store'])->name('companies.store');
        Route::get('companiesq/dashboard/{id}', [CompanyController::class, 'dashboard'])->name('companies.dashboard');

        //Business Card Creator Wizard
        Route::get('companiesq/business_card_creator/{id}/step1', [CompanyController::class, 'create_business_card'])->name('companies.create_business_card');
        Route::get('companiesq/business_card_creator/{id}/step2/{company_id}', [CompanyController::class, 'design_card'])->name('companies.design_card');
        Route::get('companiesq/business_card_creator/{id}/step3/{company_id}', [CompanyController::class, 'add_social_links_page'])->name('companies.add_social_links_page');
        Route::get('companiesq/business_card_creator/{id}/step4/{company_id}', [CompanyController::class, 'publish_your_card'])->name('companies.publish_your_card');
        Route::post('companiesq/business_card_creator/store_business_card', [CompanyController::class, 'store_business_card'])->name('companies.create_business_card.store_business_card');

        //Company Inbox
        Route::get('companiesq/inbox/{id}/{message_id}/{card_id}', [CompanyInboxController::class, 'index'])->name('companies.inbox');

        //Company Portfolio
        Route::get('companiesq/portfolio/{id}/', [CompanyPortfolioController::class, 'index'])->name('companies.portfolio');
        Route::post('companiesq/portfolio/store', [CompanyPortfolioController::class, 'store'])->name('companies.portfolio_store');
        Route::get('card-preview/{company_id}/{card_id}/{templete_id}', [CompanyController::class, 'iframe_preview'])->name('companies.iframe_preview');



        Route::post('companiesq/business_card_template', [CompanyController::class, 'business_card_template_save'])->name('companies.business_card_template_save');
        Route::post('companiesq/save_social_media', [CompanyController::class, 'save_social_media'])->name('companies.save_social_media');
        Route::post('companiesq/update_business_card', [CompanyController::class, 'update_card'])->name('companies.update_card');


        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
