<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CardController;
use App\Http\Controllers\Backend\EmailToolController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('cards/index', [CardController::class, 'index'])->name('cards.index');
Route::get('cards/getTableDetails', [CardController::class, 'getData'])->name('cards.getData');


Route::get('email-tool/index', [EmailToolController::class, 'index'])->name('emailtool.index');
Route::post('email-tool/add_email', [EmailToolController::class, 'add_email_to_bulk'])->name('emailtool.add_email');
Route::get('email-tool/getTableDetails', [EmailToolController::class, 'getTableDetails'])->name('emailtool.getTableDetails');


Route::get('email-orders/index', [EmailToolController::class, 'email_orders'])->name('emailtool.email_orders.index');
Route::get('email-orders/getTableDetails', [EmailToolController::class, 'getEmailOrderTableDetails'])->name('emailtool.email_orders.getEmailOrderTableDetails');
Route::get('email-orders/show/{id}', [EmailToolController::class, 'open_order'])->name('emailtool.email_orders.show');

