@extends('layout.layout')
 
@section('content')
 
	
<div class="full_container">
         <div class="">
            <div class="row">
             
           
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste Proprietaires</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead class="thead-dark ">
                                          <tr>
                                             <th>Linlle</th>
                                             <th>Nomnre Etage</th>
                                             <th>Superficie</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($proprietes as $propriete)
                                          <tr>
                                             <td>{{$propriete->libelle}}</td>
                                             <td>{{$propriete->nombre_etage}}</td>
                                             <td>{{$propriete->superficie}}</td>
                                             <td>{{$propriete->quartier->libelle}}</td>
                                             <td>{{$propriete->type_Propriete->libelle}}</td>
                                             
                                             <td><a href="#">Detail</a></td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#">Delete</a></td>
                                          </tr>
                                          @endforeach
                                         
                                       </tbody>
                                    </table>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
          
         </div>
      </div>
@endsection