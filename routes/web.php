<?php

use App\Models\Event;
use App\Models\Testimony;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TemplateController;

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


Route::get('preview-template/{template}',[App\Http\Controllers\TemplateController::class,'preview'])->name('preview-template');
Route::get('preview-page/{page}',[App\Http\Controllers\TemplateController::class,'preview_page'])->name('preview-page');
Route::get('preview-info/{info}',[App\Http\Controllers\InfoController::class,'preview_info'])->name('preview-info');


Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

Route::get('/getform', [App\Http\Controllers\PaymentController::class, 'payment'])->name('getform');

Route::get('/failed-payment/3f9d7b2c8', [App\Http\Controllers\PaymentController::class, 'failed'])->name('failed-payment');
Route::get('/payment-success/3f9d7b2c8', [App\Http\Controllers\PaymentController::class, 'success'])->name('payment-successful');

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);


Route::redirect('canvas','/');

foreach(Event::where('active',1)->get() as $event) {
    Route::get('event'."/".$event->slug, [
        'uses' => 'App\Http\Controllers\InfoController@render_event',
        'event'=>$event->id
    ])->name('event-'.$event->slug);
}

foreach(Testimony::where('active',1)->get() as $testimony) {
    Route::get('testimony'."/".$testimony->slug, [
        'uses' => 'App\Http\Controllers\TestimonyController@render_testimony',
        'testimony'=>$testimony->id
    ])->name('testimony-'.$testimony->slug);
}
