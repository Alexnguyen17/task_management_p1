<?php

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


// tao 1 nhom route voi tien to customer
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        // hien thi danh sach khach hang
        return view('modules.customer.index');
    });

    Route::get('create', function () {
        // Hien thi Form khach hang
    });

    Route::post('store', function () {
        //Xu ly du lieu tao khach hang thong qua phuong thuc POST tu form
    });

    Route::get('{id}/show', function () {
        // Hien thi thong tin chi tiet khach hang co ma dinh danh id
    });

    Route::get('{id}/edit', function () {
        // Hien thi Form chinh sua thong tin khach hang
    });

    Route::patch('{id}/update', function (){
        // Xu ly luu du lieu thong tin khach hang duoc chinh sua thong qua PATCH tu form
    });

    Route::delete('{id}', function (){
        // Xoa thong tin du lieu khach hang
    });
});

