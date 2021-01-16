@extends('header/header_back')
<!-- Main Content -->
@section('content')

<style>
.blink {
  animation: blink 1s infinite;
}
@keyframes blink { 
  0% { opacity:0; }
  50% { opacity:1; } 
  100% { opacity:0; }
}
</style>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h5><strong>CATALOGUE DES PRODUITS</strong></h5>
                   
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
               
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
                            <table class="table table-bordered table-striped table-hover theme-color dataTable js-exportable">
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
                                        <td>{{$produit->nom_produit}}</td>
                                        <td><span class="text-muted">{{$produit->quantite_produit ?? 0}}</span></td>
                                        <td>{{$produit->prix_ht_produit ?? '0'}} FCFA</td>
                                        <td>
                                        @if($produit->quantite_produit>3) 
                                        <span class="col-green" >En stock </span> 
                                        @else
                                        <span class="col-red blink">En rupture</span>
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
