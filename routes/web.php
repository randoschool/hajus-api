<?php

use App\Http\Controllers\ContentController;
use App\Models\Content;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ['content' => Content::all()]);
    })->name('dashboard');
    Route::get('/contents', [ContentController::class, 'create'])->name('content.create');
    Route::post('/contents', [ContentController::class, 'save'])->name('content.save');
});

require __DIR__ . '/auth.php';
