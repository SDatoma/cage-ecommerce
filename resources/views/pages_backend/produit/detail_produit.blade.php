@extends('header/header_back')

@section('content')
<!-- Right Sidebar -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h5>DETAIL DU PRODUIT</h5>
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">eCommerce</li>
                        <li class="breadcrumb-item active">Product Detail</li>
                    </ul> -->
                            @if($promotion==null)
                               <button class="btn btn-primary btn-sm" style="float:right" data-toggle="modal" data-target="#promotion">
                                   <i class="zmdi zmdi-plus"></i> Definir une Promotion
                               </button>
                               @include('modals/ajout/definir_promotion')
                            @else
                            <button class="btn btn-success btn-sm" style="float:right" data-toggle="modal" data-target="#mp{{$promotion->id_promotion}}">
                                   <i class="zmdi zmdi-plus"></i> Modifier Promotion
                               </button>
                               @include('modals/modification/edit_promotion')

                            @endif

                        

                    <button class="btn btn-primary btn-icon mobile_menu" type="button">
                    <i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                      <!-- <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div> -->
            </div>
        </div>
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
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-12">
                                    <div class="preview preview-pic tab-content">
                                        <div class="tab-pane active" id="product_1"><img src="/{{$produit->image_produit}}" class="img-fluid" widht="50px" height="50px" alt="" /></div>
                                        @foreach($produit_images as $produit_image)
                                        <div class="tab-pane" id="product_2"><img src="/{{$produit_image->photo_produit}}" class="img-fluid" widht="50px" height="50px" alt=""/></div>
                                        @endforeach
                                        
                                    </div>
                                    <ul class="preview thumbnail nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product_1"><img src="/{{$produit->image_produit}}" alt=""/></a></li>
                                        @foreach($produit_images as $produit_image)
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_2"><img src="/{{$produit_image->photo_produit}}" widht="50px" height="30px" alt=""/></a></li>
                                        @endforeach
                                                                         
                                    </ul>                
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-12">
                                    <div class="product details">
                                        <h3 class="product-title mb-0">{{$produit->nom_produit}}</h3>
                                        <hr>
                                        <!-- <p class="product-description">{{$produit->description_produit}}</p> -->
                                        <p class="vote"><strong>QUANTITE</strong> : {{$produit->quantite_produit ?? '0'}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong style="color:red">{{$produit->stock_produit}}</strong></p>
                                        <p class="vote"><strong>PRIX_HT</strong> : {{$produit->prix_ht_produit ?? '0'}} FCFA 
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        @if($promotion!=null)
                                          <b style="color:red">En promotion {{$promotion->pourcentage_promotion ?? '0'}} % ; Code promo : {{$promotion->code_promotion ?? '0'}} <sup><a href="" title="Supprimer" data-toggle="modal" data-target="#sp{{$promotion->id_promotion}}"><i class="fa fa-remove"></i> Supprimer</a></sup></b>
                                          @include('modals/suppression/delete_promotion')
                                        @endif
                                        </p>
                                        <hr>
                                        <p class="vote"><strong>SOUS CATEGORIE</strong> : {{$produit->libelle_sous_categorie}}</p>
                                        <p class="vote"><strong>FOURNISSEUR</strong> : {{$produit->nom_boutique}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description">Description</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review">Commentaires</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Composition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">                            
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <p>{{$produit->description_produit}}</p>
                                </div>
                                <div class="tab-pane" id="review">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied</p>
                                    <ul class="row list-unstyled c_review mt-4">
                                        <li class="col-12">
                                            <div class="avatar">
                                                <a href="javascript:void(0);"><img class="rounded" src="{{asset('css_backend/assets/images/xs/avatar2.jpg')}}" alt="user" width="60"></a>
                                            </div>                                
                                            <div class="comment-action">
                                                <h5 class="c_name">Hossein Shams</h5>
                                                <p class="c_msg mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                                <div class="badge badge-primary">iPhone 8</div>
                                                <span class="m-l-10">
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Dec 21, 2019</small>
                                            </div>                                
                                        </li>
                                        <li class="col-12">
                                            <div class="avatar">
                                                <a href="javascript:void(0);"><img class="rounded" src="{{asset('css_backend/assets/images/xs/avatar3.jpg')}}" alt="user" width="60"></a>
                                            </div>                                
                                            <div class="comment-action">
                                                <h5 class="c_name">Tim Hank</h5>
                                                <p class="c_msg mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                <div class="badge badge-primary">Nokia 8</div>
                                                <span class="m-l-10">
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Dec 18, 2019</small>
                                            </div>                                
                                        </li>                                   
                                    </ul>
                                </div>
                                <div class="tab-pane" id="about">
                                    <!-- <h6>Composition</h6> -->
                                    <p>{{$produit->caracteristique_produit}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()
