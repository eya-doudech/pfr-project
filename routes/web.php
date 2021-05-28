<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TemplateController,
    RegisterController,

    CategorieController,
    DepartementController,
    ImmobliController,
    UserController,
    HomeController,
    Auth\LoginController,
};
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ImageUploadController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['is_admin']], function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::resource('categories', 'App\Http\Controllers\CategorieController');
    Route::get('/trashed/categories', [CategorieController::class, 'trash'])->name('categories.trashed');
    Route::get('/trashed/categories/restore/{id}', [CategorieController::class, 'restore'])->name('categories.trashed.restore');
    Route::get('/history/categories', [CategorieController::class, 'history'])->name('categories.trashed.history');

    Route::resource('departements', 'App\Http\Controllers\DepartementController');
    Route::get('/trashed/departements', [DepartementController::class, 'trash'])->name('departements.trashed');
    Route::get('/trashed/departements/restore/{id}', [DepartementController::class, 'restore'])->name('departements.trashed.restore');
    Route::get('/history/departements', [DepartementController::class, 'history'])->name('departements.trashed.history');

    Route::resource('immobilisations', 'App\Http\Controllers\ImmobliController');
    Route::get('/trashed/immobilisations', [ImmobliController::class, 'trash'])->name('immobilisations.trashed');
    Route::get('/trashed/immobilisations/restore/{id}', [ImmobliController::class, 'restore'])->name('immobilisations.trashed.restore');
    Route::get('/history/immobilisations', [ImmobliController::class, 'history'])->name('immobilisations.trashed.history');

    Route::resource('/users', 'App\Http\Controllers\UserController');

    Route::get('/trashed/users', [UserController::class, 'trash'])->name('users.trashed');
    Route::get('/trashed/users/restore/{id}', [UserController::class, 'restore'])->name('users.trashed.restore');
    Route::get('/history/users', [UserController::class, 'history'])->name(' users.trashed.history');


    //  Image upload routes
    Route::get('image-upload', [ImageUploadController::class, 'imageUpload'])->name('image.upload');
    Route::post('image-upload', [ImageUploadController::class, 'imageUploadPost'])->name('image.upload.post');

    Route::get('/modifications', [ImmobliController::class, 'modifications']);
});
