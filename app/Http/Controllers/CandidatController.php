<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;

class CandidatController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidats.index',[
            'candidats'=>\App\Models\Candidat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $data = $request->only(['nom','prenom','candidature']);
        $candidat = Candidat::create($data);
        $request->session()->flash('status', 'votre candidature a été accepté');
        return redirect()->route('candidats.show',['candidat'=> $candidat->id]);
        */
        
        $validateData = $request->validate([
            'nom'=>'required|min:3|max:20',
            'prenom'=>'required|min:3|max:20',
            'date_recrutement'=>'required'
        ]);
        $candidat = new Candidat();
        $candidat->nom = $request->input('nom');
        $candidat->prenom = $request->input('prenom');
        $candidat->date_recrutement = $request->input("date_recrutement");

        $candidat->save();
        $request->session()->flash('status', 'votre candidature a été accepté');
        return redirect()->route('candidats.show',['candidat'=> $candidat->id]);

        
/*
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $candidature = $request->input('candidature');

        dd($nom, $prenom, 'date_candidature: ', $candidature);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('candidats.show',[
            'candidat'=>\App\Models\Candidat::find($id)
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $candidat = Candidat::findOrFail($id);
        //dd($candidat);

        //die('j');

        return view('candidats.edit', [
            'candidat' => $candidat
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request,$id)
    {
        $candidat = Candidat::findOrFail($id);
        $candidat->nom = $request->input('nom');
        $candidat->prenom = $request->input('prenom');
        $candidat->date_recrutement = $request->input('date_recrutement');

        $candidat->save();
        $request->session()->flash('status', 'votre candidature a été modifié');
        return redirect()->route('candidats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request,$id)
    {
        // $candidat = Candidat::findOrFail($id);
        // $candidat->delete();
        Candidat::destroy($id);
        $request->session()->flash('status', 'votre candidature a été supprimé');
        return redirect()->route('candidats.index');
    }

}
