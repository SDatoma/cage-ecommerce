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

Route::get('/detail-produit/{id}','ProduitController@detail_produit')->name('detail-produit.produit');


// ROUTE BACKEND
Route::get('/admin', 'AdminController@index');

//Boutique
Route::get('/add/boutique', 'FournisseurController@create');
Route::get('/list/boutique', 'FournisseurController@getBoutique');

//Categorie
Route::get('/list/categorie', 'CategorieController@getAllCategorie');
Route::get('/list/sous/categorie', 'CategorieController@getAllSousCategorie');
Route::post('/add/sous/categorie', 'CategorieController@store_sous_categorie')->name('sous_categorie.store');
Route::put('/update/sous/{id}categorie', 'CategorieController@update_sous_categorie')->name('sous_categorie.update');

//Produits
Route::get('/add/produit', 'ProduitController@create');
Route::get('/list/produit', 'ProduitController@getAllProduit');
Route::post('/promotion/produit', 'ProduitController@promotionProduit')->name('promotion.produit');
Route::delete('delete/promotion/produit/{id}', 'ProduitController@destroyPromotion')->name('delete.promotion');
Route::put('update/promotion/produit/{id}', 'ProduitController@updatePromotion')->name('update.promotion');

//Commande
// Route::get('/facturation/commande', function () {
//     return view('pages_backend/commande/facturation');
// });

Route::get('/list/commande/attente', 'CommandeController@getAllCommandeUser');

Route::get('/statistique/stock', 'StockController@index');


//LES RESOURCES
Route::resource('fournisseur', 'FournisseurController');
Route::resource('categorie', 'CategorieController');
Route::resource('produit', 'ProduitController');
Route::resource('stock', 'StockController');
Route::resource('commande', 'CommandeController');

