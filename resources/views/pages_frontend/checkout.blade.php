
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
                                                    <input type="text" name="" value="{{Cookie::get('nom_user') ?? ''}}" />
												</div>
												
												<div class="tax-select mb-25px">
                                                    <label>
                                                        * Prenom
                                                    </label>
                                                    <input type="text" name="" value="{{Cookie::get('prenom_user') ?? ''}}" />
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
                                                        * Email
                                                    </label>
                                                    <input type="email" name="" value="{{Cookie::get('email_user') ?? ''}}" />
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
													   * Pays
                                                    </label>
                                                    <input type="text" />
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
													   * Ville
                                                    </label>
                                                    <input type="text" name=""/>
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
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Expédier à une adresse différente ?</h4>
                                        </div>
                                        <div class="discount-code">
										       <div class="tax-select mb-25px">
                                                    <label>
                                                        Nom
                                                    </label>
                                                    <input type="text"/>
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
                                                        Prenom
                                                    </label>
                                                    <input type="text" />
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
                                                        Pays
                                                    </label>
                                                    <input type="text" />
												</div>

												<div class="tax-select mb-25px">
                                                    <label>
                                                        Ville
                                                    </label>
                                                    <input type="text" />
												</div>
                                                <!-- <button class="cart-btn-2" type="submit">Apply Coupon</button> -->
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mt-md-30px">
                                    <div class="grand-totall">
									   <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Votre commande</h4>
                                        </div>
                                        <h5>Total Produit<span> {{ShoppingCart::countRows() ?? '0'}}</span></h5>
                                        <h5>Prix Total<span>{{ShoppingCart::total() ?? '0'}} FCFA</span></h5>
                                       
                                        <div class="total-shipping">
                                            <h5>Frais accessoirs</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Livraison <span>0 FCFA</span></li>
                                                <li><input type="checkbox" /> Taxe <span>0%</span></li>
                                            </ul>
                                        </div>
										<h4 class="grand-totall-title">Net a payer<span>{{ShoppingCart::totalPrice() ?? '0'}} FCFA</span></h4>
										 <button class="cart-btn-2" type="submit"> <a >Commander</a></button>
                                       
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
	