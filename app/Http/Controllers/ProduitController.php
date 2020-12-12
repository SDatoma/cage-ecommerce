<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\PhotoProduit;
use App\Models\Boutique;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ProduitController extends Controller
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
        $boutiques = Boutique::all() ;
        $sous_categories = SousCategorie::all() ;

        return view('pages_backend/produit/ajouter_produit',compact('boutiques','sous_categories'));
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
            'nom_produit' => 'required|string',
        ]);

         $verification_produit = Produit::where(['nom_produit' =>$request->nom_produit ,'id_boutique' =>$request->id_boutique])->first() ;

        if ($verification_produit) {

            Session()->flash('error',"Cet produit existe deja dans cette boutique , Veuillez mettre à jour la quantité");
            return back()->withErrors($validator)->withInput();
        }

        if ($request->HasFile('file')) {
            $cover = $request->file('file');
            $image = Image::make($cover)->encode('jpg');
            $image->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Image::make($image)->save('files_upload/produit/'.$request->nom_produit.'.jpg');

            $file_name ='files_upload/produit/'.$request->nom_produit.'.jpg';

          }else{

            $file_name ="";
         }

        $produit = new Produit();

        $produit->nom_produit= $request->nom_produit;
        $produit->description_produit= $request->description_produit;
        $produit->caracteristique_produit= $request->caracteristique_produit;
        $produit->quantite_produit= $request->quantite_produit;
        $produit->prix_ht_produit= $request->prix_produit;
        $produit->id_sous_categorie= $request->id_sous_categorie;
        $produit->id_boutique= $request->id_boutique;
        $produit->image_produit=$file_name;
        $produit->etat_produit= 1 ;

        $produit->save();

        if($produit){

            $i=0; 
            foreach($request->photo as $photo){
                $taille_max = 104857600; // 100 Mo
                $file_name_photo = $photo->getClientOriginalName();
                $file_extension = strrchr($file_name_photo, ".");
                $file_tmp_name = $photo->getPathname();
                $filedest = 'files_upload/produit/'.$file_name_photo;

                if(move_uploaded_file($file_tmp_name,$filedest)){
                         $chemin_photo=$filedest;
                 }else{
                     $chemin_photo="null";
                 }

                $photo_produit= new PhotoProduit(); 

                $photo_produit->id_produit=$produit->id_produit;
                $photo_produit->photo_produit=$chemin_photo;
            
                $photo_produit->save();

             $i++;
          }

        }

        Session()->flash('succes',"Produit enregistrer avec succè");
        return redirect()->back();
    }

     //List des produits
     public function getProduit()
     {
         $produits = Produit::where(['etat_produit' =>1])->get() ;
 
         return view('pages_backend/produit/list_produit',compact('produits'));
     }
	 
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$produit = Produit::where(['id_produit' =>$id])->first() ;
        $produit_images = PhotoProduit::where(['id_produit' =>$id])->get() ;
         $produit = DB::table('produit')
        ->join('sous_categorie', 'produit.id_sous_categorie', '=', 'sous_categorie.id_sous_categorie')
        ->join('boutique', 'produit.id_boutique', '=', 'boutique.id_boutique')
        ->where('produit.id_produit', '=', $id)
        ->first();
 
        return view('pages_backend/produit/detail_produit',compact('produit','produit_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::where(['id_produit' =>$id])->first() ;
        $boutiques = Boutique::all() ;
        $sous_categories = SousCategorie::all() ;

        return view('pages_backend/produit/edit_produit',compact('produit','boutiques','sous_categories'));
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
        $produit = Produit::where(['id_produit' =>$id])->first() ;

        $produit->nom_produit= $request->nom_produit;
        $produit->description_produit= $request->description_produit;
        $produit->caracteristique_produit= $request->caracteristique_produit;
        $produit->quantite_produit= $request->quantite_produit;
        $produit->prix_ht_produit= $request->prix_produit;
        $produit->id_sous_categorie= $request->id_sous_categorie;
        $produit->id_boutique= $request->id_boutique;
        //$produit->image_produit=$file_name;
        //$produit->etat_produit= 1 ;

        $produit->save();

        Session()->flash('succes',"Modification effectuee avec succès");
        return redirect()->to('/list/produit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::where(['id_produit' =>$id])->first() ;

        $produit->etat_produit = 0 ;

        $produit->save();

        Session()->flash('error',"Suppression effectuee avec succès");
        return redirect()->back();
    }
}
