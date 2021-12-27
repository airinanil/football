<?php
use lluminate\Database\Eloquent\Collection;

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\playercontroller;

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



Route::get('/clubview',[playercontroller::class,'clubview']);
Route::get('/',[playercontroller::class,'index']);
 
Route::get('/club',[playercontroller::class,'createclub']);
Route::post('/clubread',[playercontroller::class,'store']);
route::get('/playerclub',[playercontroller::class,'playerclub']);
route::get('/playerdetails',[playercontroller::class,'create']);

Route::post('/playerread',[playercontroller::class,'storeplayer']);
Route::post('/playersearch',[playercontroller::class,'search']);
Route::get('/sort',[playercontroller::class,'sort']);