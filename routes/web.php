<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

use App\Http\Controllers\sendEmailController; 


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

 

// Route::get('/', 'HomeController@index')->name('pages.index');
Route::get('/',[HomeController::class, 'index'])->name('pages.index');
Route::get('pages/about',[HomeController::class, 'about'])->name('pages.about');
Route::get('pages/contact',[HomeController::class, 'contact'])->name('pages.contact'); 
Route::get('pages/rates',[HomeController::class, 'rates'])->name('pages.rates');
Route::get('pages/privacy',[HomeController::class, 'privacy'])->name('pages.privacy');
Route::get('pages/term_condition',[HomeController::class, 'term_condition'])->name('pages.term_condition');
Route::get('pages/ship-from-china',[HomeController::class, 'shipFromChina'])->name('pages.ship-from-china');
Route::post('contacts/sendmail',[sendEmailController::class, 'mail'])->name('send.mail');
    



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
