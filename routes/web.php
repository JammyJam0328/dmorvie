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
        switch (auth()->user()->role_id) {
            case 1:
                return redirect()->route('super-admin.dashboard');
                break;
            case 2:
                return redirect()->route('branch-admin.dashboard');
                break;
        }
    })->name('dashboard');
});

Route::prefix('/super-admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'super_admin'
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
Route::prefix('/branch-admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'branch_admin'
])->group(function () {
    Route::get('/dashboard',function(){
        return view('branch-admin.dashboard');
    })->name('branch-admin.dashboard');
    Route::get('/rooms',function(){
        $floors = \App\Models\Floor::where('branch_id',auth()->user()->branch_id)->get('id','number');
        $statuses = \App\Models\Status::all();
        $types = \App\Models\Type::where('branch_id',auth()->user()->branch_id)->get('id','name');
        return view('branch-admin.rooms',[
            'floors'=>$floors,
            'statuses'=>$statuses,
            'types'=>$types,
        ]); 
    })->name('branch-admin.rooms');
    Route::get('/checkin',function(){
        return view('branch-admin.checkin');
    })->name('branch-admin.checkin');
    Route::get('/inhouse',function(){
        return view('branch-admin.inhouse');
    })->name('branch-admin.inhouse');
    Route::get('/rates',function(){
        $types = \App\Models\Type::where('branch_id',auth()->user()->branch_id)->get('id','name','description');
        return view('branch-admin.rates',[
            'types'=>$types,
        ]);
    })->name('branch-admin.rates');
});
