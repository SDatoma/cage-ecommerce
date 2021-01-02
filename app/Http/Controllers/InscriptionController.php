<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class InscriptionController extends Controller
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
		 $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'userprenom' => 'required|string',
            'useremail' => 'required',
            'usercivilite' => 'required',
            'usertelephone' => 'required',
            'usernews' => 'required',
        ]);
		
		if (strlen($request->userpassword) < 8) {
            Session()->flash('error','Mot de passe trop cours !');
            return back()->withErrors($validator)->withInput();
        }
		
		if($request->userpassword != $request->userpasswordconfirm){
			Session()->flash('error','Les mots de passe ne sont pas conforment ! Merci de re-saisir. ');	
			return back()->withErrors($validator)->withInput();
		}
		
		//if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $request->userpassword)){
		
				$user = new User();

				$user->nom_user = $request->username;
				$user->prenom_user = $request->userprenom;
				$user->email_user = $request->useremail;
				$user->password_user = $request->userpassword;
				$user->sexe_user = $request->usercivilite;
				$user->telephone_user = $request->usertelephone;
				$user->ok_newsletter = $request->usernews;
				$user->type_user = 2;
			   
				$user->save();
				
				Session()->flash('succes');
				return redirect('/');
				
		/*if($user->save()){
			
			$presence_heure = DB::table('presences')
			->latest('presences.id')
			->first();
			
			$heure = $presence_heure->updated_at;
			
			$user = DB::table('users')
			->where('users.id', '=', $presence_heure->user_id)
			->first();
			
			$poste = $user->username;
			
			  $e_mail = $tele->email; //prend l'email de la table
              $objet = "Alerte connexion eConvivial";
			  $contenu = "Cher(ère),
				Vous vous êtes connecté(e)s à votre compte Téléconseiller à 
					ce jour " .$heure. " au poste " .$poste ;

			  $from = "From: eCentre Convivial <togo@econvivial.org>\nMime-Version:";
			  $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n";
			  // envoie du mail
			  mail($e_mail, $objet, $contenu, $from);
			
            return redirect()->route("espacemembre-assistance-en-ligne")
			->with(["message" => "Votre présence a été bien signalé dans le système"]);
			//}
        }else{
            return redirect()
			->back()
			->with(["error" => "Impossible d'enrégistrer. Veuillez réessayer"])
			->withInput();
        }
		*/		
		//} else  {
            
		//	Session()->flash('error','Le mot de passe doit contenir des lettres masjuscules [A-Z], 
		//	minuscules [a-z], des chiffres [0-9] et des caracteres speciaux (*\W@+/-). Merci de respecter. ');
            
        //    return redirect('/connexion');
        //}
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


    public function update_sous_categorie(Request $request, $id)
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
