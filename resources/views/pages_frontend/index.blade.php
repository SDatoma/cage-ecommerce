
@include('header/header_frontend')

	
<div class="header-menu  d-xl-block d-none bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 custom-col-3">
                            <div class="header-menu-vertical bg-blue">
                                <h4 class="menu-title be-af-none">Les Catégories</h4>
                                <ul class="menu-content display-block">
                                    
                                    <li class="menu-item">
                                        <a href="#">Video Games <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Handheld Game Players</a></li>
                                                    <li><a href="#">Game Controllers</a></li>
                                                    <li><a href="#">Joysticks</a></li>
                                                    <li><a href="#">Stickers</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
								@foreach($categories as $categorie)
									<li class="menu-item"><a href="#">{{$categorie->libelle_categorie}}</a></li>
								@endforeach
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-7 custom-col custom-col-3">
                        <!-- Slider Start -->
                            <div class="slider-area slider-height-2">
                                <div class="hero-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('css_front_end/assets/images/slider-image/sample-3.jpg')}});">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white">GALAXY WATCH</span>
                                                    <h1 class="animated color-white">
                                                        Pre-Order <br />
                                                        <strong>Exclusive</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('css_front_end/assets/images/slider-image/sample-4.jpg')}});">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white">BT HEADPHONE</span>
                                                    <h1 class="animated color-white">
                                                        Headset <br />
                                                        <strong>Hyper X</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                </div>
                            </div>
                            <!-- Slider End -->
                        </div>
                        <div class="col-lg-3">
                            <div class="banner-area banner-area-2">
                                <div class="banner-wrapper mb-15px">
                                    <a href="shop-4-column.html"><img src="{{asset('css_front_end/assets/images/banner-image/9.jpg')}}" alt="" /></a>
                                </div>
                                <div class="banner-wrapper">
                                    <a href="shop-4-column.html"><img src="{{asset('css_front_end/assets/images/banner-image/10.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
                <!-- Static Area Start -->
                <div class="static-area  ptb-40px">
                    <div class="container">
                        <div class="static-area-wrap">
                            <div class="row">
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="{{asset('css_front_end/assets/images/icons/static-icons-1.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Livraison gratuite</h4>
                                            <p>Partout au Togo</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="{{asset('css_front_end/assets/images/icons/static-icons-2.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Satisfait ou rembourser</h4>
                                            <p>Dans les 72 heures</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                                    <div class="single-static">
                                        <img src="{{asset('css_front_end/assets/images/icons/static-icons-3.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Disponible 24/7</h4>
                                            <p>Pour toute assistance</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                    <div class="single-static">
                                        <img src="{{asset('css_front_end/assets/images/icons/static-icons-4.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Payement 100% Sécurisé</h4>
                                            <p>Votre paiement est en sécurité avec nous.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Static Area End -->
            </div>

<div class="offcanvas-overlay"></div>
<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Catégories Populaires
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					
					@foreach($categories as $categorie)
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="">
									<img src="{{asset('css_front_end/assets/images/product-image/2-1.jpg')}}" height=180 alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="">Nom : {{$categorie->libelle_categorie}}</a>
								</h4>
								<div class="w3l-pricehkj">
								@foreach($sous_categories as $sous_categorie)
									@if($sous_categorie->id_categorie == $categorie->id_categorie)
										<h6>{{$sous_categorie->libelle_sous_categorie}}</h6>
									@endif
								@endforeach
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item 
								hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
											<input type="hidden" name="amount" value="220.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					@endforeach
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->



	<!-- top Products -->
	<div class="ads-grid" style="margin-top:-100px">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Nos produits
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Produits populaires</h3>
						
						
						@foreach($produits as $produit)
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{$produit->image_produit}}" height=200 width=300 class="thumbnail" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('detail-produit.produit', $produit->id_produit)}}" class="link-product-add-cart">Voir plus</a>
										</div>
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{route('detail-produit.produit', $produit->id_produit)}}">{{$produit->nom_produit}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$produit->prix_ht_produit}} F CFA</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item 
									hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Almonds, 100g" />
												<input type="hidden" name="amount" value="149.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Ajouter au panier" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
						
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Nouvelles Arrivées</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk7.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">Neuf</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Yippee Noodles, 65g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$15.00</span>
										<del>$25.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
												<input type="hidden" name="amount" value="15.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk8.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Wheat Pasta, 500g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$98.00</span>
										<del>$120.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Wheat Pasta, 500g" />
												<input type="hidden" name="amount" value="98.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mk9.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Chinese Noodles, 68g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$11.99</span>
										<del>$15.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Chinese Noodles, 68g" />
												<input type="hidden" name="amount" value="11.99" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->

	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Faites livrer vos courses dans les magasins locaux</h2>
				<p>Livraison gratuite sur votre première commande!</p>
				<form action="#" method="post">
					<input type="email" placeholder="Laissez nous votre E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="{{asset('css_frontend/images/tab3.png')}}" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	
	
@include('footer/footer_frontend')
