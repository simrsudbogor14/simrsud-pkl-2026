<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'doLogin']);

/*
|--------------------------------------------------------------------------
| MENU BIODATA
|--------------------------------------------------------------------------
*/
Route::get('/menu/{nama}', function ($nama) {

    if (!session('login')) {
        return redirect('/');
    }

    if (!in_array($nama, ['bian', 'rasya', 'faiq'])) {
        abort(404);
    }

    $allComments = session('comments', []);
    $comments = $allComments[$nama] ?? [];

    return view('menu', compact('nama', 'comments'));
});

/*
|--------------------------------------------------------------------------
| SIMPAN KOMENTAR
|--------------------------------------------------------------------------
*/
Route::post('/comment/{nama}', function (Request $request, $nama) {

    if (!session('login')) {
        return redirect('/');
    }

    $request->validate([
        'nama' => 'required',
        'isi'  => 'required',
    ]);

    $allComments = session('comments', []);
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

    $allComments = session('comments', []);

    if (isset($allComments[$nama][$index])) {
        unset($allComments[$nama][$index]);
        $allComments[$nama] = array_values($allComments[$nama]);
        session(['comments' => $allComments]);
    }

    return back();
});

?>
