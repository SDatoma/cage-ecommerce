<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boutique;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Alert;

class FournisseurController extends Controller
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
        return view('pages_backend/fournisseur/ajouter_boutique');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom_boutique' => 'required|string',
        ]);

        $verification_email = Boutique::where(['email_boutique' =>$request->email_boutique])->first() ;

        if ($verification_email) {

            Session()->flash('error',"Cet email appartient deja a un compte fournisseur , Veuillez mettre un mail valide");
            return back()->withErrors($validator)->withInput();
        }

        if ($request->HasFile('file')) {
            $cover = $request->file('file');
            $image = Image::make($cover)->encode('jpg');
            $image->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Image::make($image)->save('files_upload/boutique/'.$request->nom_boutique.'.jpg');

            $file_name ='files_upload/boutique/'.$request->nom_boutique.'.jpg';

          }else{

            $file_name ="";
         }

        $boutique = new Boutique();

        $boutique->nom_boutique= $request->nom_boutique ;
        $boutique->slogan_boutique= $request->slogan_boutique ;
        $boutique->ville_boutique= $request->ville_boutique ;
        $boutique->pays_boutique= $request->pays_boutique ;
        $boutique->contact_1_boutique= $request->contact_boutique1 ;
        $boutique->contact_2_boutique= $request->contact_boutique2 ;
        $boutique->email_boutique= $request->email_boutique ;
        $boutique->nif_boutique= "null" ;
        $boutique->photos_boutique=$file_name;
        $boutique->etat_boutique=1;
        $boutique->description_boutique= $request->description_boutique ;

        $boutique->save();

        return back()->with('success', 'Enregistrement effectuer avec succè');

    }

    //List des boutiques
    public function getBoutique()
    {
        $boutiques = Boutique::where(['etat_boutique' =>1])->get() ;

        return view('pages_backend/fournisseur/list_boutique',compact('boutiques'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boutique = Boutique::where(['id_boutique' =>$id])->first() ;

        return view('pages_backend/fournisseur/detail_boutique',compact('boutique'));
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
        $boutique = Boutique::where(['id_boutique' =>$id])->first() ;

        if ($request->HasFile('file')) {
            $cover = $request->file('file');
            $image = Image::make($cover)->encode('jpg');
            $image->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Image::make($image)->save('files_upload/boutique/'.$id.'.jpg');

            $file_name ='files_upload/boutique/'.$id.'.jpg';

          }else{

            $file_name =$boutique->photos_boutique;
         }
        $boutique->nom_boutique= $request->nom_boutique ;
        $boutique->slogan_boutique= $request->slogan_boutique ;
        $boutique->ville_boutique= $request->ville_boutique ;
        $boutique->pays_boutique= $request->pays_boutique ;
        $boutique->contact_1_boutique= $request->contact_boutique1 ;
        $boutique->contact_2_boutique= $request->contact_boutique2 ;
        $boutique->email_boutique= $request->email_boutique ;
        $boutique->photos_boutique=$file_name;
        $boutique->description_boutique= $request->description_boutique ;

        $boutique->save();
        return back()->with('success', 'Modification effectuée avec succè');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boutique = Boutique::where(['id_boutique' =>$id])->first() ;

        $boutique->etat_boutique= 0;
         
        $boutique->save();

        return back()->with('success', 'Suppression effectuée avec succè');

    }
}
