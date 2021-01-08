<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\LigneCommande;
use ShoppingCart;
use Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use PDF;

class CommandeController extends Controller
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
         // Recupration de la date du jour
         $date_jour=date('Y-m-d');
         $nom_user= Cookie::get('nom_user');
         $prenom_user= Cookie::get('prenom_user');
         $email_user= Cookie::get('email_user');

         $chars = "abcdefghijkmnopqrstuvwxyz023456789";
         srand((double)microtime()*1000000);
         $i = 0 ;
         $code = '' ;
         while ($i <= 4) {
             $num = rand() % 33;
             $tmp = substr($chars, $num, 1);
             $code = $code . $tmp;
             $i++;
         }

         $commande = new Commande();
         
         $commande->reference_commande= $code;
         $commande->date_commande= $date_jour;
         $commande->etat_commande= 0;
         $commande->id_user= Cookie::get('id_user');
    
         $commande->save();

         $items = ShoppingCart::all();

         foreach($items as $item){
           
            $ligne_commande = new LigneCommande();
         
         $ligne_commande->reference_commande= $code;
         $ligne_commande->quantite_commande= $item->qty;
         $ligne_commande->prix_commande= $item->total;
         $ligne_commande->id_commande= $commande->id_commande;
         $ligne_commande->id_produit= $item->id;
    
         $ligne_commande->save();

         }

         Mail::to($email_user)->send(new TestMail($nom_user, $prenom_user, $request->titre_mail,$request->description_mail));

         ShoppingCart::destroy();
 
         return redirect()->to('/');
    }


    public function getAllCommandeUser()
    {
        //   $commandes = DB::table('commande')
        //  ->join('produit', 'commande.id_produit', '=', 'produit.id_produit')
        //  ->join('user', 'commande.id_user', '=', 'user.id_user')
        //  ->where('commande.id_user', '=', $id_user)
        //  ->where('commande.etat_commande', '=', 0)
        //  ->distinct('commande.id_user')
        //  ->get();

        $sql = ("SELECT count(commande.id_produit) as nombre_produit, user.nom_user as nom_user,
		user.prenom_user as prenom_user ,user.id_user as id_user
		FROM commande, user, produit
        WHERE produit.id_produit = commande.id_produit
        AND user.id_user = commande.id_user 
		AND commande.etat_commande = 0 
		GROUP BY user.nom_user, prenom_user,user.id_user");
		
		$commandes=DB::select(DB::raw($sql));

        return view('pages_backend/commande/list_commande_attente',compact('commandes'));
    }


    public function getAllUser()
    {
          $users = DB::table('user')
          ->get();

        return view('pages_backend/commande/list_client',compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where(['id_user' =>$id])->first() ;

        $prix_total = DB::table('ligne_commande')
        ->join('commande', 'ligne_commande.id_commande', '=', 'commande.id_commande')
        ->join('user', 'user.id_user', '=', 'commande.id_user')
        ->join('produit', 'produit.id_produit', '=', 'commande.id_produit')
        ->where('commande.id_user', '=', $id)
        ->where('commande.etat_commande', '=', 0)
        ->SUM('ligne_commande.prix_commande');
        
        $sql = ("SELECT count(ligne_commande.prix_commande) as prix_net,ligne_commande.quantite_commande as quantite,ligne_commande.prix_commande as prix_total,produit.nom_produit as nom_produit ,produit.prix_ht_produit as prix_ht_produit
		FROM commande, user, produit,ligne_commande
        WHERE commande.id_user= $id
		AND produit.id_produit = commande.id_produit
        AND ligne_commande.id_commande = commande.id_commande
        AND user.id_user = commande.id_user 
		AND commande.etat_commande = 0 
		GROUP BY user.nom_user, prenom_user,ligne_commande.quantite_commande,ligne_commande.prix_commande,produit.nom_produit,produit.prix_ht_produit");
		
		$commandes=DB::select(DB::raw($sql));

        return view('pages_backend/commande/facturation',compact('commandes','user','prix_total'));
    }


    public function download_facture($id)
    {    
        $user = User::where(['id_user' =>$id])->first() ;

        $prix_total = DB::table('ligne_commande')
        ->join('commande', 'ligne_commande.id_commande', '=', 'commande.id_commande')
        ->join('user', 'user.id_user', '=', 'commande.id_user')
        ->join('produit', 'produit.id_produit', '=', 'commande.id_produit')
        ->where('commande.id_user', '=', $id)
        ->where('commande.etat_commande', '=', 0)
        ->SUM('ligne_commande.prix_commande');
        
        $sql = ("SELECT count(ligne_commande.prix_commande) as prix_net,ligne_commande.quantite_commande as quantite,ligne_commande.prix_commande as prix_total,produit.nom_produit as nom_produit ,produit.prix_ht_produit as prix_ht_produit
		FROM commande, user, produit,ligne_commande
        WHERE commande.id_user= $id
		AND produit.id_produit = commande.id_produit
        AND ligne_commande.id_commande = commande.id_commande
        AND user.id_user = commande.id_user 
		AND commande.etat_commande = 0 
		GROUP BY user.nom_user, prenom_user,ligne_commande.quantite_commande,ligne_commande.prix_commande,produit.nom_produit,produit.prix_ht_produit");
		
		$commandes=DB::select(DB::raw($sql));

         $pdf = PDF::loadView('pages_backend/commande/facture_pdf',['user'=>$user,'prix_total'=>$prix_total,'commandes'=>$commandes])->setPaper('a4', 'landscape');

        return $pdf->stream('facture.pdf');
        
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
        //
    }
}
