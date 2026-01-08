<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'doLogin']);

Route::get('/menu/{nama}', function ($nama) {
    if (!session('login')) {
        return redirect('/');
    }

    return view('menu', compact('nama'));
});
