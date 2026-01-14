<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL (SOLUSI 404)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/menu/bian');
});

/*
|--------------------------------------------------------------------------
| MENU BIODATA
|--------------------------------------------------------------------------
*/
Route::get('/menu/{nama}', function ($nama) {

    if (!in_array($nama, ['bian', 'rasya', 'faiq'])) {
        abort(404);
    }

    $comments = session()->get("comments_$nama", []);

    return view('menu', compact('nama', 'comments'));
});

/*
|--------------------------------------------------------------------------
| TAMBAH KOMENTAR
|--------------------------------------------------------------------------
*/
Route::post('/comment/{nama}', function (Request $request, $nama) {

    $comments = session()->get("comments_$nama", []);

    $comments[] = [
        'nama' => $request->nama,
        'isi'  => $request->isi,
    ];

    session()->put("comments_$nama", $comments);

    return back();
});

/*
|--------------------------------------------------------------------------
| HAPUS KOMENTAR
|--------------------------------------------------------------------------
*/
Route::delete('/comment/{nama}/{index}', function ($nama, $index) {

    $comments = session()->get("comments_$nama", []);

    if (isset($comments[$index])) {
        unset($comments[$index]);
        session()->put("comments_$nama", array_values($comments));
    }

    return back();
});
