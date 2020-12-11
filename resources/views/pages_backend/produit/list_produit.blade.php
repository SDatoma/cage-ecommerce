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
                                        <td><span class="text-muted">{{$produit->quantite_produit}}</span></td>
                                        <td>{{$produit->prix_ht_produit}} FCFA</td>
                                        <td><span class="col-green">   </span></td>
                                        <td>
                                            <a href="{{route('produit.show',$produit->id_produit)}}" class="btn btn-success waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-eye"></i></a>

                                            <a href="" class="btn btn-primary waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="" class="btn btn-danger waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
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
</section>


@endsection()
