@extends('header/header_back')


<!-- Main Content -->
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>LISTE DES PRODUITS</h2>
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">eCommerce</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ul> -->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div> -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
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
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>IMAGE</th>
                                        <th>NOM PRODUIT</th>
                                        <th data-breakpoints="sm xs">QUANTITE</th>
                                        <th data-breakpoints="xs">PRIX_HT</th>
                                        <th data-breakpoints="xs md">ETAT</th>
                                        <th data-breakpoints="sm xs md">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($produits as $produit)
                                    <tr>
                                        <td><img src="/{{$produit->image_produit}}" width="48" alt="Product img"></td>
                                        <td><h5>{{$produit->nom_produit}}</h5></td>
                                        <td><span class="text-muted">{{$produit->quantite_produit ?? 0}}</span></td>
                                        <td>{{$produit->prix_ht_produit ?? '0'}} FCFA</td>
                                        <td>
                                        @if($produit->quantite_produit>=5) <span class="col-green">En stock </span> 
                                        @elseif($produit->quantite_produit<=3)  
                                        <span class="col-amber">En rupture</span> 
                                        @else <span class="col-red">Fini</span>
                                        @endif
                                        </td>
                                        <td>
                                            <a href="{{route('produit.show',$produit->id_produit)}}" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-eye"></i></a>

                                            <a href="{{route('produit.edit',$produit->id_produit)}}" class="btn btn-primary waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="" class="btn btn-danger waves-effect waves-float btn-sm waves-red" data-toggle="modal" data-target="#sp{{$produit->id_produit}}"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    @include('modals/suppression/delete_produit')
                                @endforeach      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection()