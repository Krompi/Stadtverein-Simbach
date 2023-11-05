<?php

use App\Models\Article;
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

Route::get('/', [\App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home'); 
Route::get('{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page'); 

Route::get('news', function () {
    return view('site.articles.index', [
        'articles' => Article::published()->orderBy('created_at', 'desc')->get(),
    ]);
})->name('articles');
