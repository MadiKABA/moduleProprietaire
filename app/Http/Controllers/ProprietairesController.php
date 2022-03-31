<?php

namespace App\Http\Controllers;

use App\Models\Proprietaires;
use Illuminate\Http\Request;

class ProprietairesController extends Controller
{
    public function index()
    {

        $proprietaire = Proprietaires::all();
        return view('proprietaires/index', [
            'proprietaires' => $proprietaire
        ]);
    }

    public function create(){
        $proprietaire=Proprietaires::all();
        return view('proprietaires/create',[
            'proprietaires'=>$proprietaire
        ]);

    }

    public function store(Request  $request){
        Proprietaires::create( $request->all());
        return redirect()->route('proprietaires.index');
    }
    public function destroy($id)
    {
        $proprietaire = Proprietaires::findOrFail($id);
        $proprietaire->delete();

        return ("proprietaires supprime");

    }
    public function update(Request $request, $id)
    {
        $proprietaire = Proprietaires::find($id);
        $proprietaire->update($request->all());
        return $proprietaire;
    }
}
