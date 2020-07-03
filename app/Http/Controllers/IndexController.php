<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Offre;
use Auth;
use DB;

class IndexController extends Controller
{
    public function index(){
        $offres=DB::table('offres')->where('active',1)->paginate(3);
        return view('pages.index',compact('offres'));
    }
    public function presentation(){
        return view ('pages.presentation');
    }
    public function contacter(){
        return view('pages.contacter');
    }
    public function inscription(){
        return view('pages.register');
    }
    public function connexion(){
        return view('pages.login');
    }
    public function postinscription(Request $request){
        $user = new User();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->role=$request->role;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('profile')->with('success','Compte créé avec succès.');
    }
    public function rechercher(Request $request)
    {
        $chercher=$request->cherche;
        $offres=DB::table('offres')
            ->where('active', '=', 1)
            ->where(function ($query)use($chercher) {
                $query->where('titre',$chercher)
                    ->orWhere('secteur',$chercher)
                    ->orWhere('categorie',$chercher)
                    ->orWhere('description',$chercher);
            })
            ->paginate(3);

            return view('pages.index',compact('offres'));
    }
    public function listeoffres1(){
        $offres=DB::table('offres')->where('active',1)->get();
        $offres = Offre::latest()->paginate(5);
        return view('pages.listeoffres1',compact('offres'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}
