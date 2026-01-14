<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect awal
Route::get('/', function () {
    return redirect('/menu/bian');
});

// Halaman menu (bian / rasya / faiq)
Route::get('/menu/{nama}', function ($nama) {

    // Ambil semua komentar
    $allComments = session('comments', []);

    // Ambil komentar khusus menu ini
    $comments = $allComments[$nama] ?? [];

    return view('menu', compact('nama', 'comments'));
});

// Simpan komentar per menu
Route::post('/comment/{nama}', function (Request $request, $nama) {

    $request->validate([
        'nama' => 'required',
        'isi'  => 'required',
    ]);

    // Ambil semua komentar
    $allComments = session('comments', []);

    // Jika menu ini belum ada, buat array kosong
    if (!isset($allComments[$nama])) {
        $allComments[$nama] = [];
    }

    // Tambah komentar ke menu yg sesuai
    $allComments[$nama][] = [
        'nama' => $request->nama,
        'isi'  => $request->isi,
    ];

    // Simpan ke session
    session(['comments' => $allComments]);

    return back();
});
