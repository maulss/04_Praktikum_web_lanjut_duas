<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// no 1
Route::get('/', function(){
    return view('home');
});
Route::get('test',[TestController::class,'index']);
// no 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return view('product.EduGames', ['pesan' => 'Menampilkan halaman Marbel Edu Games']);
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return view('product.friend', ['pesan' => 'Menampilkan halaman Marbel and Friends Kids Games']);
    });
    Route::get('/riri-story-books', function () {
        return view('product.riri', ['pesan' => 'Menampilkan halaman Riri Story Books']);
    });
    Route::get('/kolak-kids-songs', function () {
        return view('product.kolak', ['pesan' => 'Menampilkan halaman Kolak Kids Songs']);
    });
});

//Number 3
Route::get('/news/{title?}', function ($title = null) {
    return view('news', ['news' => $title ]);
});

//Number 4
Route::prefix('program')->group (function () {
    Route::get('/karir', function () {
        return view('program.karir', ['pesan' => 'Menampilkan halaman program karir']);
    });
    Route::get('/magang', function () {
        return view('program.magang',['pesan' => 'Menampilkan halaman program magang' ]);
    });
    Route::get('/kunjungan-industri', function () {
        return view('program.kunjungan', ['pesan' => 'Menampilkan halaman program kunjungan industri']);
    });
});

//Number 5
Route::get('/about', function () {
    return view('about-us');
});

//Number 6
Route::resource('contact', PageController::class)->only([
    'index'
]);
