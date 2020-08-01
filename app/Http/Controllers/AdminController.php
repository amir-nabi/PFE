<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use App\Offre;

class AdminController extends Controller
{
    //
    public function getlogin(){
        return view('admin.pages.login');
    }
    public function postloginadmin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $role="Administrateur";
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => $role])) {
            return redirect()->route('adminprofile');
        }
        return redirect()->back();
    }
    public function adminprofile(){
        $offres = DB::table('offres')->count();
        $users = DB::table('users')->count();
        $fournisseurs = DB::table('users')->where('role','Fournisseur')->count();
        $clients = DB::table('users')->where('role','Client')->count();
        return view('admin.pages.index',compact('offres','users','fournisseurs','clients'));
    }
    public function affichelisteoffres(){
        $offres=DB::table('offres')->paginate(5);
        return view('admin.pages.listeoffres',compact('offres'));
            }
            public function affichelisteoffres1(){
                $offres=DB::table('offres')->where('categorie','Embouteillage et conditionnement des liquides alimentaires')->paginate(5);
                return view('admin.pages.listeoffres',compact('offres'));
                    }
            public function affichelisteoffres2(){
                        $offres=DB::table('offres')->where('categorie','Injection et transformation des matières plastiques')->paginate(5);
                        return view('admin.pages.listeoffres',compact('offres'));
                            }
            public function affichelisteoffres3(){
                                $offres=DB::table('offres')->where('categorie','Traitement et le transport des fluides')->paginate(5);
                                return view('admin.pages.listeoffres',compact('offres'));
                                    }
    public function activer_offre($id)
                                    {
                                        $offres=Offre::find($id);
                                        $offres->active=1;
                                        $offres->save();
                                        return redirect()->back();
                                    }
    public function desactiver_offre($id)
                                    {
                                        $offres=Offre::find($id);
                                        $offres->active=0;
                                        $offres->save();
                                        return redirect()->back();
                                    }
    public function afficher_offre($id)
                                    {
                                        $offre = Offre::findOrFail($id);
                                        return view('admin.pages.info_offre',compact('offre'));
                                    }
    public function afficher_utilisateur(){
                                        $users=DB::table('users')->paginate(5);
                                            return view('admin.pages.fournisseurs',compact('users'));
                                    }
    public function afficher_fournisseur(){
        $users=DB::table('users')->where('role','Fournisseur')->paginate(5);
            return view('admin.pages.fournisseurs',compact('users'));
    }
    public function afficher_client(){
        $users=DB::table('users')->where('role','Client')->paginate(5);
            return view('admin.pages.fournisseurs',compact('users'));
    }
    public function activer_fournisseur($id)
    {
        $user=User::find($id);
        $user->etat=1;
        $user->save();
        return redirect()->back();
    }
    public function desactiver_fournisseur($id)
    {
        $user=User::find($id);
        $user->etat=0;
        $user->save();
        return redirect()->back();
    }
    public function deconnecter(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function offres_de_fournisseur($id){
        $offres=DB::table('offres')->where('user_id',$id)->paginate(5);
        return view('admin.pages.listeoffres',compact('offres'));
    }

}
