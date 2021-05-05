<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\AnnotationController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\MyCardController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('card_preview', [HomeController::class, 'test_page'])->name('test_page');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/annotate', [AnnotationController::class,'annotateImage'])->name('image_scanning');

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

        Route::get('companies', [CompanyController::class, 'index'])->name('companies');
        Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
        Route::post('companies/store', [CompanyController::class, 'store'])->name('companies.store');

        Route::get('companiesq/dashboard/{id}', [CompanyController::class, 'dashboard'])->name('companies.dashboard');
        Route::get('companiesq/business_card_creator/{id}/step1', [CompanyController::class, 'create_business_card'])->name('companies.create_business_card');
        Route::get('companiesq/business_card_creator/{id}/step2/{company_id}', [CompanyController::class, 'design_card'])->name('companies.design_card');
        Route::get('companiesq/business_card_creator/{id}/step3/{company_id}', [CompanyController::class, 'add_social_links_page'])->name('companies.add_social_links_page');
        Route::get('companiesq/business_card_creator/{id}/step4/{company_id}', [CompanyController::class, 'publish_your_card'])->name('companies.publish_your_card');
        Route::post('companiesq/business_card_creator/store_business_card', [CompanyController::class, 'store_business_card'])->name('companies.create_business_card.store_business_card');

        Route::get('card-preview/{company_id}/{card_id}/{templete_id}', [CompanyController::class, 'iframe_preview'])->name('companies.iframe_preview');

        Route::post('companiesq/business_card_template', [CompanyController::class, 'business_card_template_save'])->name('companies.business_card_template_save');
        Route::post('companiesq/save_social_media', [CompanyController::class, 'save_social_media'])->name('companies.save_social_media');
        Route::get('companiesq/vcardgenerator/{card_id}', [CompanyController::class, 'vcardgenerator'])->name('companies.vcardgenerator');



        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
