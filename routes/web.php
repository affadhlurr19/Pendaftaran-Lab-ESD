<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/user-data', [App\Http\Controllers\AdminController::class, 'userData'])->name('admin.user-data')->middleware('is_admin');
Route::get('admin/delete-user/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.delete.user')->middleware('is_admin');
Route::get('admin/registration-data', [App\Http\Controllers\AdminController::class, 'registrationData'])->name('admin.registration-data')->middleware('is_admin');
Route::post('admin/user-accepted/{user_id}', [App\Http\Controllers\AdminController::class, 'userAccepted'])->name('admin.user-accepted')->middleware('is_admin');
Route::post('admin/user-rejected/{user_id}', [App\Http\Controllers\AdminController::class, 'userRejected'])->name('admin.user-rejected')->middleware('is_admin');
Route::delete('admin/delete-registration-data/{id_upload}', [App\Http\Controllers\AdminController::class, 'deleteRegistrationData'])->name('admin.delete-registration-data')->middleware('is_admin');
Route::get('admin/download-registartion-data/{id_upload}', [App\Http\Controllers\AdminController::class, 'downloadRegistrationData'])->name('admin.download-registartion-data')->middleware('is_admin');
Route::get('admin/download-file-CV/{id_upload}', [App\Http\Controllers\AdminController::class, 'downloadFileCV'])->name('admin.download-file-CV')->middleware('is_admin');
Route::get('admin/download-file-KSM/{id_upload}', [App\Http\Controllers\AdminController::class, 'downloadFileKSM'])->name('admin.download-file-KSM')->middleware('is_admin');
Route::get('admin/download-file-ML/{id_upload}', [App\Http\Controllers\AdminController::class, 'downloadFileML'])->name('admin.download-file-ML')->middleware('is_admin');
Route::get('admin/download-file-Personalities/{id_upload}', [App\Http\Controllers\AdminController::class, 'downloadFilePersonalities'])->name('admin.download-file-Personalities')->middleware('is_admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/status-check', [App\Http\Controllers\HomeController::class, 'statusCheck'])->name('status-check');
Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'myProfile'])->name('my-profile');
Route::get('/edit-profile/{id}', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('edit-profile');
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update-profile');

Route::get('/upload-file', [App\Http\Controllers\FileUploadController::class, 'createFileUpload'])->name('upload-file');
Route::post('/save-file', [App\Http\Controllers\FileUploadController::class, 'saveFileUpload'])->name('save-file');



