@extends('header/header_back')

<!-- Main Content -->
@section('content')

<style>

.body-main {
     background: #ffffff;
     border-bottom: 15px solid #1E1F23;
     border-top: 15px solid #1E1F23;
     margin-top: 30px;
     margin-bottom: 30px;
     padding: 40px 30px !important;
     position: relative;
     box-shadow: 0 1px 21px #808080;
     font-size: 10px
 }

 .main thead {
     background: #1E1F23;
     color: #fff
 }

 .img {
     height: 100px
 }

 h1 {
     text-align: center
 }

</style>

<section class="content">
    <div class="body_scroll">
       
	<div class="container">
    <div class="page-header">
    <center>
        <button class="btn btn-primary btn-sm" onclick="printContent('dataTable')">
            <i class="zmdi zmdi-print"></i>  Imprimer
        </button>
    </center>
    </div>
    <div class="container">
       <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
        <div class="row" id="dataTable">
            <div class="col-md-12 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="{{asset('css_frontend/images/logo2.png')}}" /><p style="margin-left:20px;font-size:15px">E-commerce</p>
						 </div>
						
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>CAGE - BATIMENT</strong></h4>
                            <p>Togo, Lomé, Agoè Démakpoè</p>
                            <p>+228 70 45 37 85 | 96 35 80 90</p>
                            <p>	cagetogo@gmail.com</p>
                        </div>
                    </div> <br />
                    <div class="row">
                        
                        <div class="col-md-12 text-center float">
                            <h2><u>FACTURE N 108</u></h2> 
                        </div>
                        <div class="col-md-8 text-left">
                            <h4 style="color: black;"><strong>{{$user->nom_user}} {{$user->prenom_user}}</strong></h4>
                            <p>{{$user->email_user}}</p>
                            <p>221 ,Baker Street</p>
                            <p>{{$user->telephone_user}}</p>
                        </div>
                    </div> <br />
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                       Libelle
                                    </th>
									<th>
                                        Quantite
                                    </th>
									<th>
                                        Prix Unitaire
                                    </th>
                                    <th>
                                        Total
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
							@foreach($commandes as $commande)
                                <tr>
                                    <td class="col-md-5">{{$commande->nom_produit}}</td>
									<td class="col-md-5">{{$commande->quantite}}</td>
									<td class="col-md-5">{{$commande->prix_ht_produit}}</td>
                                    <td class="col-md-5">{{$commande->prix_total}}</td>
                                </tr>
                            @endforeach  
                                <tr class="pull-right">
                                    <td class="text-right">
                                        <p> <strong>Sous Total :</strong> </p>
                                        <p> <strong>Livraison :</strong> </p>
                                        <p> <strong>Taxe :</strong> </p>
                                    </td>
                                    <td>
                                        <p> <strong> {{$prix_total}}</strong> </p>
                                        <p> <strong> 1000</strong> </p>
                                        <p> <strong> 0 </strong> </p>
                                    </td>
                                </tr>
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>TOTAL A PAYER :</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong><?php echo $prix_total+1000 ?> F CFA</strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <p><b>Date : </b> 
                            <?php echo date('d-m-Y')?>
                            </p> <br />
                            <p><b>Signature</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</section>

       <script>
            function printContent(id){
                $("#print").hide();
                //$("#retour").hide();
                var restorepage = document.body.innerHTML;
                var printContent = document.getElementById(id).innerHTML;
                document.body.innerHTML = printContent;
                window.print();
                document.body.innerHTML = restorepage;
                $("#print").show();
                //$("#retour").show();
            }
        </script>

@endsection()
