
<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>

	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/">Accueil</a>
						<i>|</i>
					</li>
					<li>Mon compte</li>
				</ul>
			</div>
		</div>
	</div>

            <div class="cart-main-area mtb-60px">
                <div class="container">
                    <h3 class="cart-page-title"></h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
	                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <a href="{{route('info.perso')}}">
									<div class="cart-tax">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">MODIFIER</h4>
                                        </div>
                                        <div class="tax-wrapper">
                                            <center><p><i class="fa fa-user-circle" style="color:#000; font-size:100px"></i></p></center>
                                            <div class="tax-select-wrapper">
                                                <center><button class="cart-btn-2" type="submit">INFORMATIONS PERSONNELLES</button></center>
                                            </div>
                                        </div>
                                    </div>
									</a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
									<a href="{{route('client.page_passe')}}">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">MODIFIER</h4>
                                        </div>
                                        <div class="discount-code">
                                            <center><p><i class="fa fa-key" style="color:#000; font-size:100px"></i></p></center>
                                            <div class="tax-select-wrapper">
                                                <center><button class="cart-btn-2" type="submit">CHANGER MOT DE PASSE</button></center>
                                            </div>
                                        </div>
                                    </div>
									</a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
								<a href="{{route('client.adresse')}}">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">MODIFIER</h4>
                                        </div>
                                        <div class="discount-code">
                                            <center><p><i class="fa fa-map-marker" style="color:#000; font-size:100px"></i></p></center>
                                            <div class="tax-select-wrapper">
                                                <center><button class="cart-btn-2" type="submit">ADRESSE DE LIVRAISON</button></center>
                                            </div>
                                        </div>
                                    </div>
								</a>
                                </div> 
                                </div> 
                                </div> 
                                </div> 
								</br>
				    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 mb-lm-30px">
								<a href="/histotique-achats">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">HISTORIQUE</h4>
                                        </div>
                                        <div class="discount-code">
                                            <center><p><i class="fa fa-cart-arrow-down" style="color:#000; font-size:100px"></i></p></center>
                                            <div class="tax-select-wrapper">
                                                <center><button class="cart-btn-2" type="submit">CONSULTER MES ACHATS</button></center>
                                            </div>
                                        </div>
                                    </div>
									</a>
                                </div>
								
                                <div class="col-lg-6 col-md-6 mb-lm-30px">
                                    <a href="/deconnexion">
									<div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray"></h4>
                                        </div>
                                        <div class="discount-code">
                                            <center><p><i class="fa fa-unlock-alt" style="color:#000; font-size:100px"></i></p></center>
                                            <div class="tax-select-wrapper">
                                                <center><button class="cart-btn-2" style="background-color:#dd4b39" type="submit">DECONNEXION</button></center>
                                            </div>
                                        </div>
                                    </div>
									</a>
                                </div>
                             </div>
                           </div>
								
						  </div>
                        </div>
                    </div>
                </div>
            </div>
	<!-- footer --><div class="product-single-w3l"></div>
	<footer>
		<div class="container">
			<!-- footer second section -->
			
	@include('footer/footer_frontend')
	
	