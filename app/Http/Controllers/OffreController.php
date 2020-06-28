<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use Image;
use File;
use Mail;

class OffreController extends Controller
{
    
    
    public function index()
    {
        $offres = Offre::latest()->paginate(5);
        return view('pages.listeoffres',compact('offres'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ajoutoffre');
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
        $request->validate([
            'titre' => 'required',
            'secteur' => 'required',
            'categorie' => 'required',
            'image' => 'required|image',
            'prix' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required'
        ]);
    
        $formInput=$request->except('image');
        $image=$request->image;
        if($image)
        {
            $image_nom=uniqid().'.'.File::extension($image->getClientOriginalName());
            $image->move('uploads/images/',$image_nom);
            $formInput['image']=$image_nom;
        }
        Offre::create($formInput);
        return redirect()->route('listeoffres.index')
                        ->with('success','Service créé avec succès.');
        //
    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = Offre::findOrFail($id);
        return view('pages.offreinfo',compact('offre'));
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
        $offre = Offre::findOrFail($id);
        return view('pages.editoffre',compact('offre'));
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Offre $offre,$id)
    {
        $image_nom=$request->image;
        $image=$request->file('image');
        if($image != '')
        {
            $request->validate([
                'titre' => 'required',
                'secteur' => 'required',
                'categorie' => 'required',
                'image' => 'required',
                'prix' => 'required',
                'date_debut' => 'required',
                'date_fin' => 'required',
            ]);
        $image_nom=rand() . '.' . $image->getClientOriginalExtension();
        $image->move('/uploads/images/',$image_nom);
        }
        else
        {
        $request->validate([
            'titre' => 'required',
            'secteur' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required'
        ]);
        }
        $offre = array(
            'titre' => $request->titre,
            'secteur' => $request->secteur,
            'categorie' => $request->categorie,
            'description' => $request->description,
            'image' => $image_nom,
            'prix' => $request->prix,
            'solde' => $request->solde,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        );
        Offre::whereId($id)->update($offre);
        return redirect()->route('listeoffres.index')
                        ->with('success','Service modifié avec succès.');
    }
 
    public function destroy($id)
    {
        Offre::find($id)->delete();
        return redirect()->route('listeoffres.index')
                        ->with('success','Service supprimé avec succès');
        //
    }
}
