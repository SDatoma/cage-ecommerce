@extends('header/header_back')


<!-- Main Content -->
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                       <h5>LISTE DES SOUS CATEGORIES</h5>
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
                                            <th>CATEGORIE</th>
                                            <th>SOUS CATEGORIE</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($categories as $categorie)
                                        <tr>
                                            <td>{{$categorie->libelle_categorie}}</td>
                                            <?php
                                              $sous_categories = \App\Models\SousCategorie::where(['id_categorie' =>$categorie->id_categorie])->get();
                                             ?>
                                            <td>
                                            @foreach($sous_categories as $sous_categorie)
                                             <p>{{$sous_categorie->libelle_sous_categorie}} <sub><a href="" title="Modifier" data-toggle="modal" data-target="#msc{{$sous_categorie->id_sous_categorie}}"> <i class="fa fa-pencil"></i> Modifier</a></sub></p>
                                             @include('modals/modification/edit_sous_categorie')
                                            @endforeach
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
