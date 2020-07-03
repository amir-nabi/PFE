<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Offre;
use App\Historique;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ContactController extends Controller
{
    public function create ($id1,$id_offre)
    {
        
        $f=User::find($id1);
        return view('contact.create',compact('f','id_offre'));
    }

    public function store(Request $request,Historique $historiques)
    {
        $email = $request->email;
        $objet = $request->objet;
        $msg = $request->msg;
        $email_client=User::find(Auth::user()->id)->email;
        $prenom_client=User::find(Auth::user()->id)->prenom;

        $historiques = $request->except('email','objet','msg');
        Historique::create($historiques);


        Mail::send('pages.email', ['email' => $email, 'objet' => $objet ,'msg'=>$msg], function ($message)use($email, $email_client, $prenom_client)
        {

            $message->from($email_client, $prenom_client);

            $message->to($email);

        });


        return redirect()->route('index')->with('success','Message envoyé!');;
    
    }
}
