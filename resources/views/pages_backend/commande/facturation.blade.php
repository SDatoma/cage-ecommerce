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
    <!-- <div class="page-header">
        <h1>Invoice Template </h1>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG59.png" /><p style="margin-left:20px;font-size:15px">E-commerce</p>
						 </div>
						
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>CAGE - ECOMMERCE</strong></h4>
                            <p>221 ,Baker Street</p>
                            <p>1800-234-124</p>
                            <p>example@gmail.com</p>
                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center float">
                            <h2><u>FACTURE N 888888888</u></h2> 
                            <h5 style="float:left"><strong style="color:black">Client :</strong> KPEKPASSI Bilali Fofana</h5>
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
                                <tr>
                                    <td class="col-md-5">Samsung Galaxy 8 64 GB</td>
									<td class="col-md-5">5</td>
									<td class="col-md-5">300</td>
                                    <td class="col-md-5"><i class="fas fa-rupee-sign" area-hidden="true"></i> 50,000 </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">JBL Bluetooth Speaker</td>
									<td class="col-md-9">5</td>
									<td class="col-md-9">300</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 5,200 </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Apple Iphone 6s 16GB</td>
									<td class="col-md-9">5</td>
									<td class="col-md-9">300</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 25,000 </td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">MI Smartwatch 2</td>
									<td class="col-md-9">5</td>
									<td class="col-md-9">300</td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 2,200 </td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <p> <strong>Taxes :</strong> </p>
                                        <p> <strong>Montant Total : </strong> </p>
                                        <p> <strong>Discount : </strong> </p>
                                        <p> <strong>Net à payer : </strong> </p>
                                    </td>
                                    <td>
                                        <p> <strong> 500 </strong> </p>
                                        <p> <strong> 82,900</strong> </p>
                                        <p> <strong> 3,000 </strong> </p>
                                        <p> <strong> 79,900</strong> </p>
                                    </td>
                                </tr>
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Total :</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong>79,900 </strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <p><b>Date :</b> 6 June 2019</p> <br />
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


@endsection()
