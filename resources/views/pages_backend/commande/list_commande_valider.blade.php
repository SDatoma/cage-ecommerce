@extends('header/header_back')
<!-- Main Content -->
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                       <h5>LISTE DES COMMANDES DEJA VALIDER</h5>
                    <!-- 
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Normal Tables</li>
                    </ul> -->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div> -->
            </div>
        </div>

        <div class="container-fluid">
           <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="header">
                            <h2>LISTE DES FOURNISSEURS</h2>
                        </div> -->

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover theme-color dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>REFERENCE</th>
                                            <th>NOM & PRENOM</th>
                                            <th>NOMBRE DE PRODUIT</th>
                                            <th>DATE COMMANDE</th>
                                            <th>ETAT</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($commandes as $commande)
                                       <?php

                                             $user = \App\Models\User::where(['id_user' =>$commande->id_user])->first() ;

                                             $produit_total_commande = DB::table('ligne_commande')
                                             ->join('commande', 'ligne_commande.id_commande', '=', 'commande.id_commande')
                                             //->join('user', 'user.id_user', '=', 'commande.id_user')
                                             ->join('produit', 'produit.id_produit', '=', 'ligne_commande.id_produit')
                                             ->where('commande.id_user', '=', $commande->id_user)
                                             ->where('commande.reference_commande', '=', $commande->reference_commande)
                                             ->where('commande.etat_commande', '=', 1)
                                             ->count('ligne_commande.id_produit');
                                       ?>
                                        <tr>
                                            <td>{{$commande->reference_commande}}</td>
                                            <td>{{$user->nom_user}} {{$user->prenom_user}}</td>
                                            <td>{{$produit_total_commande}}</td>
                                            <td>{{$commande->date_commande}}</td>
                                            <td><strong class="col-green">Valider</strong></td>
                                            <td>
                                            <a href="{{route('voir.facture',[$commande->id_user,$commande->reference_commande])}}">
                                            <button class="btn btn-succes btn-sm" title="Voir facture" data-toggle="modal" data-target="#"><i class="zmdi zmdi-eye"></i></i></button> 
                                            </a>
                                            
                                          </td>
                                          
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

    </div>
</section>



@endsection()
