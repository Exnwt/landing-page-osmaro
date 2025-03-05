<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Models\FasilitasMedis;
use App\Livewire\Dashboard;
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



Route::get('/', function () {
    $site_name = get_pengaturan_value('_site_name');
    $lokasi = get_pengaturan_value('_location');
    $instagram = get_pengaturan_value('_instagram');
    $facebook = get_pengaturan_value('_facebook');
    $linkedin = get_pengaturan_value('_linkedin');
    $post = get_post();

    return view('home', compact('site_name', 'lokasi', 'instagram', 'facebook', 'linkedin', 'post'));
});

Route::get('/posts/{slug}', [TestController::class, 'show'])->name('posts.show');

Route::get('/post', [PostController::class, 'index'])->name('post');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/about', function () {
    return view('about.about');
})->name('about');
Route::get('/mitra', function () {
    return view('mitra.mitra');
})->name('mitra');

Route::get('/fasilitas', function () {
    $fasilitas = FasilitasMedis::all();
    return view('fasilitas.fasilitas', compact('fasilitas'));
})->name('fasilitas');

Route::get('/layanan', function () {
    return view('layanan.layanan');
})->name('layanan');







//Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

