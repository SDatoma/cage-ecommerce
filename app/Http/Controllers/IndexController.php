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
		
        $produits = Produit::where(['etat_produit' =>1,'nouveau_produit' =>'Existant'])->get() ;
        
        $sous_categories = SousCategorie::all();

        $id_categorie = 0;

        $sliders = DB::table('slider')
         ->where('etat_slider', '=', 1)
         ->orderBy('id_slider', 'desc')
         ->limit(2)
         ->get();
        
         $nouveau_produits = DB::table('produit')
         ->where('produit.etat_produit', '=', 1)
         ->where('produit.nouveau_produit', '=', 'Nouveau')
         ->get();
        
       return view('pages_frontend/index',compact('categories', 'produits', 'sous_categories','nouveau_produits','sliders','id_categorie'));
	
    }
	
	public function liste_categorie_header_mobile(){
		
		$categories = Categorie::all();
		
		return view('pages_frontend/header/header_frontend',compact('categories'));
	}
	
	public function page_contact(){
		
		$id_categorie=0 ;
		
		return view('pages_frontend/contact',compact('id_categorie'));
    }
    
    public function condition_general(){
		
		$id_categorie=0 ;
		
		return view('pages_frontend/condition_generale',compact('id_categorie'));
    }
    
    public function politique_confidentialite(){
		
		$id_categorie=0 ;
		
		return view('pages_frontend/politique_confidentialite',compact('id_categorie'));
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
        //->where('produit.nouveau_produit', '=', 'Existant')
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
        //->where('produit.nouveau_produit', '=', 'Existant')
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
        $mot_cle=$request->recherche;
		
         return view('pages_frontend/resultat_recherche',compact('categories','produits','id_categorie','mot_cle'));
	
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
