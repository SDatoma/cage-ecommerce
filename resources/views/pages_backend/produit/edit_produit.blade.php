@extends('header/header_back')


<!-- Main Content -->
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                <h5>MODIFICATION DU PRODUIT <strong style="color:red;font-size:25px">&nbsp;&nbsp;{{$produit->nom_produit}} </strong></h5>
                    <!--<ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ul>-->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                 <!--<div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div> -->
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
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
                            <form id="form_validation" method="POST" action="{{route('produit.update',$produit->id_produit)}}" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Nom du produit" name="nom_produit" value="{{$produit->nom_produit}}" required>
                                </div>
                                <div class="form-group form-float">
                                    <textarea name="description_produit" cols="30" rows="5" placeholder="Description du produit" class="form-control no-resize" required>{{$produit->description_produit}}</textarea>
                                </div>
                                <div class="form-group form-float">
                                    <textarea name="caracteristique_produit" cols="30" rows="5" placeholder="Caracteristique du produit" class="form-control no-resize" required>{{$produit->caracteristique_produit}}</textarea>
                                </div>
                                <div class="form-group form-float">
                                    <input type="number" min="100" class="form-control" placeholder="Prix du produit" name="prix_produit" value="{{$produit->prix_ht_produit}}" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="number" min="1" class="form-control" placeholder="Quantite en stock" name="quantite_produit" value="{{$produit->quantite_produit}}" required>
                                </div>
                                <div class="form-group form-float">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select" name="id_sous_categorie" required>
                                      @foreach($sous_categories as $sous_categorie)
                                       <option value="{{$sous_categorie->id_sous_categorie}}" @if($produit->id_sous_categorie ==$sous_categorie->id_sous_categorie) selected @endif> {{$sous_categorie->libelle_sous_categorie}} </option>
                                       @endforeach
                                    </select>
                                   
                                </div>

                                <div class="form-group form-float">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select" name="id_boutique" required>
                                      @foreach($boutiques as $boutique)
                                       <option value="{{$boutique->id_boutique}}" @if($produit->id_boutique== $boutique->id_boutique) selected @endif> {{$boutique->nom_boutique}} </option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select"      name="nouveau_produit" required>
                                       <option value=""> CHOISISSEZ L'ETAT DU PRODUIT</option>
                                       <option value="Nouveau" @if($produit->nouveau_produit== "Nouveau") selected @endif> Nouveau</option>
                                       <option value="Existant" @if($produit->nouveau_produit== "Existant") selected @endif> Existant </option>
                                    </select>
                                </div>
                                
                                   <div>
                                       <div class="form-group form-float col-sm-5">
                                             <input type="file" class="dropify" name="file">
                                       </div>
                                   </div>

                               <center> <button class="btn btn-raised btn-primary waves-effect " type="submit">MTTRE A JOUR</button> </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()
