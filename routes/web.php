<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\BlogsController::class,"getBlogs"]);

Route::get('contact', function (){
    return view ('components.contact');
});

Route::get('about',function(){
    return view('components.about');
});

Route::get('admin',function(){
    return view('components.admin');
})->name('admin');

Route::get('admin_dashboard',[App\Http\Controllers\BlogsController::class,'getBlogs1']);

Route::get('add_blogs',function(){
    return view('components.add_blogs');
});



Route::post('contact_store',[App\Http\Controllers\ContactController::class,'contact_store']);

Route::post('admin_login',[App\Http\Controllers\ContactController::class,'admin_login']);

Route::post('blogs_store',[App\Http\Controllers\BlogsController::class,'blogs_store']);

Route::get('delete/{id}',[App\Http\Controllers\BlogsController::class,'blog_delete']);

Route::get('edit/{id}',[App\Http\Controllers\BlogsController::class,'edit_blog']);

Route::put('update_blogs/{id}',[App\Http\Controllers\BlogsController::class,'update_blogs']);

Route::get('contact_requests',[App\Http\Controllers\BlogsController::class,'get_contacts']);

Route::get('logout',[App\Http\Controllers\BlogsController::class,'logout']);









