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
		
		$verification_email = User::where(['email_user' =>$request->useremail])->first() ;
		
		if ($verification_email) {

            Session()->flash('error',"Ce mail existe déjà sous un compte, Merci d'utiliser un autre. ");
            return back()->withErrors($validator)->withInput();
        }
		
		if (strlen($request->userpassword) < 8) {
            Session()->flash('error','Mot de passe trop cours !');
            return back()->withErrors($validator)->withInput();
        }
		
		if($request->userpassword != $request->userpasswordconfirm){
			Session()->flash('error','Les mots de passe ne sont pas conforment ! Merci de re-saisir. ');	
			return back()->withErrors($validator)->withInput();
		}
		
		//if (preg_match  ){
		
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
		
		return $this->connexion_auto($request->useremail, $request->userpassword);
		
    }
	
	public function connexion_auto($email, $passe){
		
		$result = User::where(['email_user' => $email, 'password_user' => $passe])->first();

        /* verifie si le les identifiant de l'utilisateur sont null il envoi erruer*/
      
        if ($result == null) {
            Session()->flash('error','Nom d\'utilisateur ou mot de passe incorrecte ');
            return redirect()->back();
            /* si non il envoi les resultats de la requete */
        }  
		
		if ($result->type_user == 2 ){
            //**** mise en cookie des données de l'utilisateur**//

            Cookie::queue('email_user', $result->email_user , 5000);
            Cookie::queue('nom_user', $result->nom_user , 5000);
            Cookie::queue('prenom_user', $result->prenom_user , 5000);
            Cookie::queue('id_user', $result->id_user , 5000);
            
            return redirect()->to('/');
		}
	}
	
	//
	public function show_profil_client()
    { 
        $id_user= Cookie::get('id_user');

        $user = User::where(['id_user' =>$id_user])->first() ;

        return view('pages_frontend/mon_compte',compact('user'));
    }
	
	public function show_info_client()
    { 
        $id_user= Cookie::get('id_user');

        $user = User::where(['id_user' =>$id_user])->first() ;

        return view('pages_frontend/info_personel',compact('user'));
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
		
		$user = User::where(['id_user' =>$id])->first() ;
		 
		$user->nom_user = $request->username;
		$user->prenom_user = $request->userprenom;
		$user->email_user = $request->useremail;
		$user->sexe_user = $request->usercivilite;
		$user->telephone_user = $request->usertelephone;
		
		$user->save();
		
		Session()->flash('success','Informations modifiées avec succès.');	
		return redirect()->back();
		
    }
	
	
	//
	public function passe_client()
    { 
        $id_user= Cookie::get('id_user');

        $user = User::where(['id_user' =>$id_user])->first() ;

        return view('pages_frontend/changer_passe',compact('user'));
    }
	
	
	//
	public function update_passe_client(Request $request, $id)
    {
		$user = User::where(['id_user' =>$id])->first() ;
		
		if (strlen($request->userpassword) < 8) {
            Session()->flash('error','Mot de passe trop cours !');
            return redirect()->back();
        }
		
		if($request->userpassword != $request->userpasswordconfirm){
			Session()->flash('error','Les mots de passe ne sont pas conforment ! Merci de re-saisir. ');	
			return redirect()->back();
		}
		
		if($request->lastuserpassword == $user->password_user)
		{
		
		$user->password_user = $request->userpassword;
	   
		$user->save();
		
		Session()->flash('success','Félicitation, Mot de passe changer avec succès. ');	
		return redirect()->back();
		
		}else{
			Session()->flash('error','L\'ancien mot de passe saisie n\'est pas correcte ! Merci de re-saisir. ');	
			return redirect()->back();
		}
    }


    public function update_adresse(Request $request, $id)
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
