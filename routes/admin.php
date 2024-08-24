<?php

use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Contact\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Gallery\GalleryController;
use App\Http\Controllers\Admin\Service\ServiceController;
use App\Http\Controllers\Admin\Youtube\YotubeController;
use App\Http\Controllers\Web\YoutubeController;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login',[LoginController::class,'index'])->name('admin.login_form');    
    Route::post('/login', [LoginController::class,'adminLogin']);
   

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin', 'as'=>'admin.'],function(){
        Route::get('/dashboard', [DashboardController::class,'dashboardView'])->name('dashboard'); 
        Route::post('logout', [LoginController::class,'logout'])->name('logout');
        Route::get('/change/password/form', [DashboardController::class,'changePasswordForm'])->name('change_password_form');
        Route::post('/change/password', [DashboardController::class,'changePassword'])->name('change_password');

        Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
            Route::get('/add', [GalleryController::class, 'galleryForm'])->name('galleryform');
            Route::post('/add/submit', [GalleryController::class, 'galleryAdd'])->name('gallerysubmit');
            Route::get('/delete/{id?}', [GalleryController::class, 'galleryDelete'])->name('gallerydelete');
            Route::get('/list', [GalleryController::class, 'galleryList'])->name('gallerylist');
        });
        Route::group(['prefix'=>'blog','as'=>'blog.'],function(){
            Route::get('list',[BlogController::class,'list'])->name('list');
            Route::get('form/{id?}',[BlogController::class,'form'])->name('form');
            Route::post('save',[BlogController::class,'save'])->name('save');
            Route::get('status/{id}',[BlogController::class,'status'])->name('status');
            Route::get('delete/{id}',[BlogController::class,'deleteBlog'])->name('delete');
        });
        Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
            Route::get('/mails/list', [ContactController::class, 'contactList'])->name('list');
            Route::get('/mails/delete/{id}', [ContactController::class, 'destroyContact'])->name('delete');
        });
        Route::group(['prefix' => 'service_enquiry', 'as' => 'service_enq.'], function () {
            Route::get('/mails/list', [ServiceController::class, 'serviceEnqList'])->name('list');
            Route::get('/mails/delete/{id}', [ServiceController::class, 'destroyServiceEnq'])->name('delete');
        });
        Route::group(['prefix' => 'youtube', 'as' => 'youtube.'], function () {
            Route::get('/list', [YotubeController::class, 'list'])->name('list');
            Route::get('/form/{id?}', [YotubeController::class, 'form'])->name('form');
            Route::post('/submit', [YotubeController::class, 'submit'])->name('submit');
        });
    });

});