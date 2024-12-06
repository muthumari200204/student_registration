<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Route
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/contacts', [ContactController::class, 'index']);
// Route::get('/contacts/create', [ContactController::class, 'create']);
// Route::post('/contacts', [ContactController::class, 'store']);
// Route::get('/contacts/{id}/edit', [ContactController::class, 'edit']);
// Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);
// Route::get('/contacts/{id}', [ContactController::class, 'show']);

Route::resource('/contacts', ContactController::class);
