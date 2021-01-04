<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ShoppingCart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ShoppingCart::associate('App\Models\Produit');

        ShoppingCart::add($request->id_produit,$request->nom_produit,1,$request->prix_produit);
        return redirect()->back();
    }

    public function emptyCart()
    {
        ShoppingCart::destroy();

        return redirect()->back();
    }

    public function getAll()
    {
        $id_categorie=0;
        $items = ShoppingCart::all();
        
        //dd($items);
        return view('pages_frontend/panier',compact('items','id_categorie'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShoppingCart::remove($id);
        return redirect()->back();
    }
}

//cart
Route::get('/empty', 'CartController@emptyCart');
Route::get('/panier', 'CartController@getAll');