<?php

use App\Http\Controllers\SpreadSheetController;
use Google\Service\Sheets\Spreadsheet;
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

Route::get('/get-sheet-data',[SpreadSheetController::class,'get_data']);
Route::post('/send-sheet-data',[SpreadSheetController::class,'send_data']);