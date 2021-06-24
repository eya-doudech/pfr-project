<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImmobliController;
use App\Http\Controllers\ImmobiliController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    
});
Route::get('immobilisations', [ImmobliController::class, 'indexapi']);
Route::post('login',[UserController::class,'auth']);
Route::get('users',[UserController::class,'fetchUser']);
Route::get('immobli',[ImmobiliController::class,'fetchDetails']);


//Route::get('/',CategorieController::class,"index");
Route::group(['middleware'=>'is_admin'],function () {

Route::post('/cat',[CategorieController::class , 'store']);
Route::get('/cat/{id}',[CategorieController::class,'show']);
Route::put('/cat/{id}',[CategorieController::class,'update']);
Route::get('/cat',[CategorieController::class , 'index']);
Route::delete('/cat/{id}',[CategorieController::class,'destroy']);

});