<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ===================
// LOGIN (PAKAI CONTROLLER)
// ===================
Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'doLogin']);


// ===================
// HALAMAN MENU (WAJIB LOGIN)
// ===================
Route::get('/menu/{nama}', function ($nama) {

    if (!session('login')) {
        return redirect('/');
    }

    $allComments = session('comments', []);
    $comments = $allComments[$nama] ?? [];

    return view('menu', compact('nama', 'comments'));
});


// ===================
// SIMPAN KOMENTAR
// ===================
Route::post('/comment/{nama}', function (Request $request, $nama) {

    if (!session('login')) {
        return redirect('/');
    }

    $request->validate([
        'nama' => 'required',
        'isi'  => 'required',
    ]);

    $allComments = session('comments', []);

    if (!isset($allComments[$nama])) {
        $allComments[$nama] = [];
    }

    $allComments[$nama][] = [
        'nama' => $request->nama,
        'isi'  => $request->isi,
    ];

    session(['comments' => $allComments]);

    return back();
});
/*
|--------------------------------------------------------------------------
| HAPUS KOMENTAR
|--------------------------------------------------------------------------
*/
Route::delete('/comment/{nama}/{index}', function ($nama, $index) {

    $comments = session()->get("comments", []);

    if (isset($comments[$index])) {
        unset($comments[$index]);
        session()->put("comments_$nama", array_values($comments));
    }

    return back();
});
