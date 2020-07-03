<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Image;
use File;
use App\Offre;
use DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfilController extends Controller
{
    public function profile(){
        return view('pages.profile');
    }

    public function profileinfo(){
        return view('pages.profileinfo', array('user' => Auth::user()));
    }

    public function charte(){
        return view('pages.charte');
    }

    public function update(Request $request){
        $user = User::find(Auth::user()->id);
        if ($request->hasFile('picture')){
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            if ($user->picture !== 'default.jpg') {
                $file = public_path('uploads/pictures/' . $user->picture);
                if (File::exists($file)) {
                    unlink($file);
                }
            }
            Image::make($picture)->resize(300, 300)->save( public_path('/uploads/pictures/' . $filename ) );
            $user = Auth::user();
            $user->picture = $filename;
            $user->save();
        }
        return view('pages.profileinfo', array('user' => Auth::user()));
    }

    public function profileinfoedit(){
        return view('pages.profileinfoedit', array('user' => Auth::user()));
    }

    public function postinfoedit(Request $request){
        $user = User::find(Auth::user()->id);
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->adresse=$request->adresse;
        $user->role=$request->role;
        $user->tel=$request->tel;
        $user->mobile=$request->mobile;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return view('pages.profileinfo', array('user' => Auth::user()));
    }

    public function deconnexion(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function postconnexion(Request $request){
        $email=$request->email;
        $password=$request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password, 'etat' => 1])) {
            return redirect()->route('profile')->with('success','czezzc');
        }
        return redirect()->back()->with('failed','zezvzc');
    }

    public function afficher_offres()
    {
        $offres=DB::table('historiques')->where('client_id',Auth::User()->id)->paginate(3);
        return view('pages.listeoffres2',compact('offres'));
    }
    public function afficher_offre2($id)
    {
        $offre = Offre::findOrFail($id);
        return view('pages.offreinfo',compact('offre'));
    }
    //
}
