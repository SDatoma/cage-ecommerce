@extends('header/header_back')


<!-- Main Content -->
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                       <h5>LISTE DES CATEGORIES</h5>
                            <div class="pull-right mt-4">
                               <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#categorie">
                                   <i class="zmdi zmdi-plus"></i> Ajouter une categorie
                               </button>
                            </div>
                            @include('modals/ajout/ajouter_categorie')
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
                        @if(Session::has('succes'))
                            <div class="form-group">
                              <div class="alert alert-success text-center">
                                  <p style="font-size:15px;text-aligne:center">{{Session::pull('succes')}} </p>
                               </div>
                            </div>
                        @elseif(Session::has('error'))
                            <div class="form-group">
                              <div class="alert alert-danger text-center">
                                  <p style="font-size:15px;text-aligne:center">{{Session::pull('error')}} </p>
                               </div>
                           </div>
                        @endif

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover theme-color dataTable js-exportable">
                                    <thead>
                                        <tr>
                                           <th>IMAGE</th>
                                            <th>LIBELLE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($categories as $categorie)
                                        <tr>
                                           <td><img src="/{{$categorie->image_categorie}}" width="48" alt="Categorie img"></td>
                                            <td>{{$categorie->libelle_categorie}}</td>
                                            <td>
                                             
                                            <button class="btn btn-succes btn-sm" title="Sous categorie"  data-toggle="modal" data-target="#sous-c{{$categorie->id_categorie}}"><i class="zmdi zmdi-plus"></i></i></button> 

                                            <button class="btn btn-primary btn-sm" title="Modifier" data-toggle="modal" data-target="#mc{{$categorie->id_categorie}}"><i class="zmdi zmdi-edit"></i></button> 

                                            <button class="btn btn-danger btn-sm" title="Supprimer" data-toggle="modal" data-target="#sc{{$categorie->id_categorie}}"><i class="zmdi zmdi-delete"></i></button>
                                            
                                            </td>
                                            @include('modals/suppression/delete_categorie')
                                        </tr>
                                             @include('modals/ajout/ajouter_sous_categorie')
                                             @include('modals/modification/edit_categorie')
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
