<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\User;
use App\Mail\TestMail;

class TestController extends Controller
{
    public function testmail()
    {
        // Send an email to codebriefly@yopmail.com
        Mail::to('cage@ecommerce.gmail')->send(new TestMail);
        return back();
    }

    public function testmail1(Request $request)
    {
        $users =User::all();
        $i=0;
        foreach($users as $user){
          // Send an email to codebriefly@yopmail.com
        Mail::to($user->email_user)->send(new TestMail($user->nom_user, $user->prenom_user, $request->titre_mail,$request->description_mail));
        
         $i++;
        }

        return back();
        
    }

}