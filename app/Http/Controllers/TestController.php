<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class TestController extends Controller
{
    public function testmail()
    {
        // Send an email to codebriefly@yopmail.com
        Mail::to('cage@ecommerce.gmail')->send(new TestMail);
        return back();
    }
}