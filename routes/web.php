<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TemplateController,
    RegisterController,
    LoginController,
    CategorieController,
    DepartementController,
    ImmobliController,
    UserController,
};

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



//categorie resources

Auth::routes();
Route::get('/',[LoginController::class,'index'])->name('auth.login.index');

Route::group(['middleware'=>['admin']],function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('categories','App\Http\Controllers\CategorieController');
    Route::get('/trashed/categories',[CategorieController::class,'trash'])->name('categories.trashed');
    Route::get('/trashed/categories/restore/{id}',[CategorieController::class,'restore'])->name('categories.trashed.restore');
    Route::get('/history/categories',[CategorieController::class,'history'])->name('categories.trashed.history');

    Route::resource('departements','App\Http\Controllers\DepartementController');
    Route::get('/trashed/departements',[DepartementController::class,'trash'])->name('departements.trashed');
    Route::get('/trashed/departements/restore/{id}',[DepartementController::class,'restore'])->name('departements.trashed.restore');
    Route::get('/history/departements',[DepartementController::class,'history'])->name('departements.trashed.history');
    Route::resource('immobilisations','App\Http\Controllers\ImmobliController');
    Route::get('/trashed/immobilisations',[ImmobliController::class,'trash'])->name('immobilisations.trashed');
    Route::get('/trashed/immobilisations/restore/{id}',[ImmobliController::class,'restore'])->name('immobilisations.trashed.restore');
    Route::get('/history/immobilisations',[ImmobliController::class,'history'])->name('immobilisations.trashed.history');
    Route::resource('/users',UserController::class);

    Route::get('/trashed/users',[UserController::class,'trash'])->name('users.trashed');
    Route::get('/trashed/users/restore/{id}',[UserController::class,'restore'])->name('users.trashed.restore');
    Route::get('/history/users',[UserController::class,'history'])->name(' users.trashed.history');

});


