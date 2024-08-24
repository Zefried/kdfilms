<?php

use App\Http\Controllers\Web\Blog\BlogController;
use App\Http\Controllers\Web\Contact\ContactController;
use App\Http\Controllers\Web\Gallery\GalleryController;
use App\Http\Controllers\Web\HomePageController;
use App\Http\Controllers\Web\Service\ServiceController;

// Route::view('/','web.index')->name('web.index');
Route::get('/',[HomePageController::class,'index'])->name('web.index');
Route::view('/about_us','web.about')->name('web.about');
Route::view('/acting','web.acting')->name('web.acting');
Route::view('/dancing_and_singing','web.dance')->name('web.dance');
Route::view('/modelling','web.modelling')->name('web.modelling');
Route::view('/photography_and_cinematography','web.photography')->name('web.photography');
Route::view('/direction_and_screenplay-writing','web.writing')->name('web.writing');
Route::view('/storyboarding','web.story')->name('web.story');
Route::get('/gallery',[GalleryController::class,'list'])->name('web.gallery');
Route::get('/blog',[BlogController::class,'list'])->name('web.blog');
Route::get('/blogdetails/{id}',[BlogController::class,'details'])->name('web.blogdetails');
Route::view('/contact','web.contact')->name('web.contact');
Route::post('service_enquiry/submit',[ServiceController::class,'enquirySubmit'])->name('web.service_enquiry.submit');
Route::post('Contact/submit',[ContactController::class,'contactSubmit'])->name('web.contact.submit');
Route::get('/refresh-captcha', [ContactController::class, 'refreshCaptcha']);