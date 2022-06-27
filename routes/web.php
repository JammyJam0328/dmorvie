<?php

use Illuminate\Support\Facades\Route;
use App\Models\{Role,Branch};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('/super-admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',function(){
        return view('super-admin.dashboard');
    })->name('super-admin.dashboard');

    Route::get('/branches',function(){
        return view('super-admin.branches');
    })->name('super-admin.branches');

    Route::get('/users',function(){
        $roles=Role::all();
        $branches=Branch::all();
        return view('super-admin.users',[
            'roles'=>$roles,
            'branches'=>$branches,
        ]);
    })->name('super-admin.users');
    Route::get('/reports',function(){
        return view('super-admin.reports');
    })->name('super-admin.reports');
});

Route::prefix('/kiosk')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/select-transaction',function(){
        return view('kiosk.transaction');
    })->name('kiosk.transaction');

    Route::get('/reports',function(){
        return view('kiosk.reports');
    })->name('kiosk.reports');
});
