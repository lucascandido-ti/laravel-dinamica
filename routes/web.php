<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;
use App\Http\Controllers\Permissions;
use App\Http\Controllers\UserPermissions;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Products;
use App\Http\Controllers\Brands;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/insert_user', [Users::class, 'insert']);
Route::post('/insert_permission', [Permissions::class, 'insert']);
Route::post('/insert_product', [Products::class, 'insert']);
Route::post('/insert_categorie', [Categories::class, 'insert']);
Route::post('/insert_brand', [Brands::class, 'insert']);

Route::post('/delete_product', [Products::class, 'delete']);
Route::post('/delete_categorie', [Categories::class, 'delete']);
Route::post('/delete_brand', [Brands::class, 'delete']);
Route::post('/delete_user', [Users::class, 'delete']);
Route::post('/delete_permission', [Permissions::class, 'delete']);

Route::post('/get_product', [Products::class, 'get']);
Route::post('/get_categorie', [Categories::class, 'get']);
Route::post('/get_brand', [Brands::class, 'get']);
Route::post('/get_user', [Users::class, 'get']);
Route::post('/get_permission', [Permissions::class, 'get']);



