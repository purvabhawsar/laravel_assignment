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

Route::get('/', function () {
    return view('welcome');
}); 
//Route::get('/createPage', function () {
    //return view('crud-page');
//});

use App\Http\Controllers\StudentController;
Route::get('students/',[StudentController::class,'crud'])->name('crud-page');
Route::post('students/',[StudentController::class,'savecrud'])->name('save-crud');
Route::get('student/',[StudentController::class,'showList'])->name('student-list');
Route::get('edit-field/{id}',[StudentController::class,'editList'])->name('edit-field');
Route::get('delete-field/{id}',[StudentController::class,'deleteList'])->name('delete-field');
Route::post('update/',[StudentController::class,'updateList'])->name('update-field');



//Route::resource('students/','App/Http/Controllers/StudentController');
