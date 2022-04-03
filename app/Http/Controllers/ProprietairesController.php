<?php

namespace App\Http\Controllers;

use App\Models\Proprietaires;
use Illuminate\Http\Request;
use PDF;

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
        return view('proprietaires/add');


    }

    public function store(Request  $request){
        Proprietaires::create( $request->all());
        return redirect()->route('proprietaire.create');
    }
    public function destroy($id)
    {
        $proprietaire = Proprietaires::findOrFail($id);
        $proprietaire->delete();

        return redirect()->route('proprietaire.list');

    }
    public function update(Request $request, $id)
    {
        $proprietaire = Proprietaires::find($id);
        $proprietaire->update($request->all());
        return redirect()->route('proprietaire.list');
    }
    public function edit($id)
    {
        $proprietaire = Proprietaires::find($id);
        return view('proprietaires/edit', [
            'proprietaires' => $proprietaire
        ]);
    }

    public function show($id)
    {

        $proprietaire = Proprietaires::find($id);
        return view('proprietaires/show', [
            'proprietaires' => $proprietaire
        ]);
    }

    public function reportPdf()
    {
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHtml($this->convert_customer_data_to_html());
        $pdf->stream();
        
    }

    public function convert_customer_data_to_html()
    {
        $proprietaires = Proprietaires::all();
        
        $output ='
        <table class="table">
        <thead class="thead-dark ">
           <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Telephone</th>
              <th>Genre</th>
              <th>Action</th>
           </tr>
        </thead>
        ';

      
        foreach($proprietaires as $prop)
        {
            $output.='
            <tr>
            <td>{{$prop->nom}}</td>
            <td>{{$prop->prenom}}</td>
            <td>{{$prop->telephone}}</td>
            <td>{{$prop->sexe}}</td>
            <td><a href="#">Detail</a></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
         </tr>
       
            ';
        }
        $output.='</table>';
    
        return $output;
           
    }
}
