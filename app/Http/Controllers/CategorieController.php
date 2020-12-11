<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class CategorieController extends Controller
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
        $categorie= new Categorie();

        $categorie->libelle_categorie=$request->libelle_categorie;
        $categorie->etat_categorie=1;

        $categorie->save();

        Session()->flash('succes',"Enregistrement effectuer avec succè");
        return redirect()->back();
    }

 // Enregistrement de sous categorie
    public function store_sous_categorie(Request $request)
    {
        $sous_categorie= new SousCategorie();

        $sous_categorie->libelle_sous_categorie=$request->libelle_sous_categorie;
        $sous_categorie->id_categorie=$request->id_categorie;

        $sous_categorie->save();

        Session()->flash('succes'," Sous categorie enregistrement effectuer avec succè");
        return redirect()->back();
    }


    //List des categories
    public function getCategorie()
    {
        $categories = Categorie::where(['etat_categorie' =>1])->get() ;

        return view('pages_backend/categorie/list_categorie',compact('categories'));
    }

    //List des sous-categories
    public function getSousCategorie()
    {
        $categories = Categorie::where(['etat_categorie' =>1])->get() ;

        return view('pages_backend/categorie/list_sous_categorie',compact('categories'));
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
        $categorie = Categorie::where(['id_categorie' =>$id])->first() ;

        $categorie->libelle_categorie=$request->libelle_categorie;
         
        $categorie->save();

        Session()->flash('succes',"Modification effectuée avec succè");
        return redirect()->back();
    }


    public function update_sous_categorie(Request $request, $id)
    {
        $sous_categorie = SousCategorie::where(['id_sous_categorie' =>$id])->first() ;

        $sous_categorie->libelle_sous_categorie=$request->libelle_sous_categorie;
         
        $sous_categorie->save();

        Session()->flash('succes',"Modification effectuée avec succès");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::where(['id_categorie' =>$id])->first() ;

        $categorie->etat_categorie= 0;
         
        $categorie->save();

        Session()->flash('error',"Suppression effectuée avec succè");
        return redirect()->back();
    }
}
