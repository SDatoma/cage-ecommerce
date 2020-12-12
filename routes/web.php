<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTE FRONT-END
Route::get('/', 'IndexController@index');


Route::get('/detail-produit', function () {
    return view('pages_front_end/detail_produit');
});




// ROUTE BACKEND
Route::get('/admin', function () {
    return view('pages_backend/index');
});

//Boutique
Route::get('/add/boutique', 'FournisseurController@create');
Route::get('/list/boutique', 'FournisseurController@getBoutique');

//Categorie
Route::get('/list/categorie', 'CategorieController@getCategorie');
Route::get('/list/sous/categorie', 'CategorieController@getSousCategorie');
Route::post('/add/sous/categorie', 'CategorieController@store_sous_categorie')->name('sous_categorie.store');
Route::put('/update/sous/{id}categorie', 'CategorieController@update_sous_categorie')->name('sous_categorie.update');

//Produits
Route::get('/add/produit', 'ProduitController@create');
Route::get('/list/produit', 'ProduitController@getProduit');


//LES RESOURCES
Route::resource('fournisseur', 'FournisseurController');
Route::resource('categorie', 'CategorieController');
Route::resource('produit', 'ProduitController');
