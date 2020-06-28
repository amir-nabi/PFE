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
        $role="admin";
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => $role])) {
            return redirect()->route('adminprofile');
        }
        return redirect()->back();
    }
    public function adminprofile(){
        $offres = DB::table('offres')->count();
        $users = DB::table('users')->count();
        return view('admin.pages.index',compact('offres','users'));
    }
    public function affichelisteoffres(){
        $offres=DB::table('offres')->get();
        return view('admin.pages.listeoffres',compact('offres'));
            }
            public function affichelisteoffres1(){
                $offres=DB::table('offres')->where('categorie','Embouteillage et conditionnement des liquides alimentaires')->get();
                return view('admin.pages.listeoffres',compact('offres'));
                    }
            public function affichelisteoffres2(){
                        $offres=DB::table('offres')->where('categorie','Injection et transformation des matières plastiques')->get();
                        return view('admin.pages.listeoffres',compact('offres'));
                            }
            public function affichelisteoffres3(){
                                $offres=DB::table('offres')->where('categorie','Traitement et le transport des fluides')->get();
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
    public function afficher_fournisseur(){
                                        $users=DB::table('users')->get();
                                            return view('admin.pages.fournisseurs',compact('users'));
                                    }
    public function deconnecter(){
        Auth::logout();
        return view('admin.pages.login');
    }
    public function offres_de_fournisseur($id){

        $offres=DB::table('offres')->where('user_id',$id)->get();
        return view('admin.pages.listeoffres',compact('offres'));
    }

}
