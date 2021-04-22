<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CardController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('cards/index', [CardController::class, 'index'])->name('cards.index');
Route::get('cards/getTableDetails', [CardController::class, 'getData'])->name('cards.getData');
