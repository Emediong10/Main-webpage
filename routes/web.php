<?php

use App\Models\Event;
use App\Models\Testimony;
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


Route::get('preview-template/{template}',[App\Http\Controllers\TemplateController::class,'preview'])->name('preview-template');
Route::get('preview-page/{page}',[App\Http\Controllers\TemplateController::class,'preview_page'])->name('preview-page');
Route::get('preview-info/{info}',[App\Http\Controllers\InfoController::class,'preview_info'])->name('preview-info');

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
