<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ChatController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-tailwind', function () {
    return view('test-tailwind');
});

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

Route::get('/chat', [ChatController::class, 'index'])->name('chat.list');

Route::middleware(['auth'])->group(function () {
    // Route untuk tampilan halaman chat (nanti kamu buat view-nya)
    Route::get('/chat/{userId}', function($userId) {
        return view('chat.index', ['receiverId' => $userId]);
    })->name('chat.index');
    
    // API Sederhana untuk fetch dan kirim pesan
    Route::get('/messages/{receiverId}', [ChatController::class, 'getMessages']);
    Route::post('/messages', [ChatController::class, 'sendMessage']);
});

// Route sementara buat login cepat (HAPUS NANTI KALAU SUDAH PRODUCTION)
Route::get('/debug-login/{id}', function ($id) {
    \Illuminate\Support\Facades\Auth::loginUsingId($id);
    return "Login sukses sebagai User ID: $id. <br> <a href='/chat/". ($id == 1 ? 2 : 1) ."'>Mulai Chat</a>";
});

// Route cadangan kalau user belum login
Route::get('/login', function() {
    return '<h3>Anda belum login!</h3> 
            Silahkan klik link ini untuk login sementara: <br>
            <a href="/debug-login/1">Login sebagai Mahasiswa</a> <br>
            <a href="/debug-login/2">Login sebagai Dosen</a>';
})->name('login');