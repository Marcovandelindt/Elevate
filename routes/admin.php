<?php

use Illuminate\Support\Facades\Route;

# Admin Login Routes
Route::get('/admin/login', [App\Http\Controllers\Admin\AdminLoginController::class, 'index'])
    ->name('admin.login');

Route::post('/admin/login', [App\Http\Controllers\Admin\AdminLoginController::class, 'login']);
