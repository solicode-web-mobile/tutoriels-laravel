<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Routes nommées avec contrôleur
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');

// Mini-routes articles (mockées pour l’instant)
Route::get('/articles', [PageController::class, 'articles'])->name('articles.index');
Route::get('/articles/{slug}', [PageController::class, 'show'])->name('articles.show');



// =======================
// 🔐 Partie admin (gestion des articles)
// (auth à ajouter plus tard)
// =======================

// TODO : Modifcation de chapitre : 3.1.3 - Formulaires, CSRF, sessions

Route::prefix('admin')->name('admin.')->group(function () {

    // Formulaire de création d'article
    Route::get('/articles/create', [ArticleController::class, 'create'])
        ->name('articles.create');

    // Enregistrement d'un nouvel article
    Route::post('/articles', [ArticleController::class, 'store'])
        ->name('articles.store');

    // (plus tard) index, edit, update, destroy...
    // Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
});