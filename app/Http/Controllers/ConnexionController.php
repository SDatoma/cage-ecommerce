<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ConnexionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_categorie=0;
        return view('pages_frontend/connexion',compact('id_categorie'));
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
        
        $result = User::where(['email_user' => $request->username,
								'password_user' => $request->userpassword])
								->first();

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
            Cookie::queue('telephone_user', $result->telephone_user , 5000);
            
            return redirect()->to('/mes-informations');
         
        }else if($result->type_user == 1 ){
			
			//**** mise en cookie des données de l'utilisateur**//
            Cookie::queue('email_user', $result->email_user , 5000);
            Cookie::queue('nom_user', $result->nom_user , 5000);
            Cookie::queue('prenom_user', $result->prenom_user , 5000);
            Cookie::queue('id_user', $result->id_user , 5000);
            
             return redirect()->to('/admin');
			}
	}


	public function logout()
    {
        return redirect('/');
    }


    public function deconnection()
    {
        Cookie::queue(Cookie::forget('id_user'));
        Cookie::queue(Cookie::forget('nom_user'));
        Cookie::queue(Cookie::forget('prenom_user'));
        Cookie::queue(Cookie::forget('email_user'));
        Cookie::queue(Cookie::forget('telephone_user'));

        return $this->logout();
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
        //
    }
}
