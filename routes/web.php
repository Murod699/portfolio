<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\SiteController@index')->name('index');

Route::post('/', 'App\Http\Controllers\SiteController@feedbackStore')->name('contact.store');

// Admin routes
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/', function(){
        return redirect()->route('ports.index');
    });
    Route::resource('/ports', 'App\Http\Controllers\Admin\PortController');
//Feedback routes
    Route::get('feedbacks', 'App\Http\Controllers\Admin\FeedbacksController@index')->name('feedbacks.index');
    Route::get('feedbacks/{id}/show', 'App\Http\Controllers\Admin\FeedbacksController@show')->name('feedbacks.show');
    Route::delete('feedbacks/{id}/delete', 'App\Http\Controllers\Admin\FeedbacksController@destroy')->name('feedbacks.destroy');


});



Auth::routes([
    'register' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
