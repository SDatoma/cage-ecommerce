
<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>


<div class="offcanvas-overlay"></div>
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                           <div class="row">
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="cart-tax">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Détails de facturation</h4>
										</div>
										<form  method="POST"  action="{{route('commande.store')}}">
										 {{ csrf_field() }}
										<div class="tax-wrapper">
                                            <div class="tax-select-wrapper">
											   <div class="tax-select mb-25px">
                                                    <label>
                                                        * Nom
                                                    </label>
                                                    <input type="text" name="" disabled="" value="{{Cookie::get('nom_user') ?? ''}}" />
												</div>
												
												<div class="tax-select mb-25px">
                                                    <label>
                                                        * Prenom
                                                    </label>
                                                    <input type="text" name="" disabled="" value="{{Cookie::get('prenom_user') ?? ''}}" />
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
                                                        * Email
                                                    </label>
                                                    <input type="email" name="" disabled="" value="{{Cookie::get('email_user') ?? ''}}" />
												</div>

											   <div class="tax-select mb-25px">
                                                    <label>
                                                        * Telephone
                                                    </label>
                                                    <input type="text" name="" />
												</div>
												
                                                <!-- <button class="cart-btn-2" type="submit">Get A Quote</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 mb-lm-30px">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Choisissez l'adresse de livraison</h4>
                                        </div>
                                           <div class="">
										      <div class="row">
                                              <?php $i=1 ?>
                                               @foreach($adresses as $adresse)
                                                   <div class="col-md-6">
                                                      <label for="huey" style="color:blue">Adresse {{$i}}</label>&nbsp;&nbsp;
                                                      <input type="radio" name="adresse" value="{{$adresse->id_adresse}}" >
                                                     <p ><strong style="color:black"> Ville </strong>: {{$adresse->ville_adresse}}</p>
                                                     <p><strong style="color:black"> Pays </strong>: {{$adresse->pays_adresse}}</p>
                                                     <p><strong style="color:black"> Description </strong>: {{$adresse->description_adresse}}</p>
                                                   </div>
                                                   <?php $i++ ?>
                                                @endforeach
                                                </div>
                                           </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 mt-md-30px">
                                    <div class="grand-totall">
									   <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Votre commande</h4>
                                        </div>
                                        <h5>Total Produit<span> {{ShoppingCart::countRows() ?? '0'}}</span></h5>
                                        <h5>Prix Total<span>{{ShoppingCart::total() ?? '0'}} FCFA</span></h5>
                                       
                                        <div class="total-shipping">
                                            <h5>Frais accessoirs</h5>
                                            <ul>
                                                <li> Livraison <span>0 FCFA</span></li>
                                                <li> Taxe <span>0%</span></li>
                                            </ul>
                                        </div>
										<h4 class="grand-totall-title" style="color:red">Net a payer<span>{{ShoppingCart::totalPrice() ?? '0'}} FCFA</span></h4>
										 <button class="cart-btn-2 btn-sm" type="submit"> <a >Commander</a></button>
                                       
                                    </div>
                                </div>
							</div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart area end -->
        

	<!-- //fourth section (noodles) -->
	<!-- footer --><div class="product-single-w3l"></div>
	<footer>
		<div class="container">
			<!-- footer second section -->
			
	@include('footer/footer_frontend')
	