<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\PhotoProduit;
use App\Models\Boutique;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
		
		$produits = Produit::where(['etat_produit' =>1])->get() ;
		
        $sous_categories = SousCategorie::all();

        //$sliders = Slider::where(['etat_slider' =>1])->get() ;
        
         $nouveau_produits = DB::table('produit')
         ->where('produit.etat_produit', '=', 1)
         ->orderBy('id_produit', 'desc')
         ->limit(4)
         ->get();
        
       return view('pages_frontend/index',compact('categories', 'produits', 'sous_categories','nouveau_produits','sliders'));
	
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function tri_produit_par_categorie($id_categorie,$libelle_categorie)
    {
        $categories = Categorie::all();
        $categoriee = Categorie::where(['id_categorie'=>$id_categorie])->first() ;
        $produits = DB::table('categorie')
		->join('produit', 'produit.id_categorie', '=', 'categorie.id_categorie')
        ->where('produit.id_categorie', '=', $id_categorie)
        ->where('categorie.id_categorie', '=', $id_categorie)
        ->where('produit.etat_produit', '=', 1)
		->get();
		
         return view('pages_frontend/categorie_produit',compact('categories','produits','id_categorie','categoriee'));
	
    }

    public function tri_produit_par_sous_categorie($id_categorie,$id_sous_categorie,$libelle_sous_categorie)
    {
        $categories = Categorie::all();
        $categoriee = Categorie::where(['id_categorie'=>$id_categorie])->first() ;
        $sous_categoriee = SousCategorie::where(['id_sous_categorie'=>$id_sous_categorie])->first() ;
        $produits = DB::table('sous_categorie')
		->join('produit', 'produit.id_sous_categorie', '=', 'sous_categorie.id_sous_categorie')
        ->where('produit.id_sous_categorie', '=', $id_sous_categorie)
        ->where('sous_categorie.id_sous_categorie', '=', $id_sous_categorie)
        ->where('produit.etat_produit', '=', 1)
		->get();
		
         return view('pages_frontend/sous_categorie_produit',compact('categories','produits','id_categorie','categoriee','sous_categoriee'));
	
    }

    public function recherche_produit(Request $request)
    {
        $categories = Categorie::all();
        //$categoriee = Categorie::where(['id_categorie'=>$id_categorie])->first() ;
        $produits = DB::table('produit')
        ->where('nom_produit', 'like', '%' . $request->recherche . '%')
        ->where('produit.etat_produit', '=', 1)
        ->get();
        
        $id_categorie=0 ;
		
         return view('pages_frontend/resultat_recherche',compact('categories','produits','id_categorie'));
	
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
        //
    }
}
