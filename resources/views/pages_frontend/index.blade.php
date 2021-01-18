
<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>

<div class="header-menu  d-xl-block d-none bg-light-gray">
                <div class="container">
                    <div class="row mt-2">
                        <!-- <div class="col-lg-2 custom-col-3">
                            <div class="header-menu-vertical bg-blue">
                                <center><h4 class="menu-title be-af-none">Catégories</h4></center>
                                <ul class="menu-content display-block">
                                  @foreach($categories as $categorie)
								            <?php
                                              $sous_categories = \App\Models\SousCategorie::where(['id_categorie' =>$categorie->id_categorie])->get();
                                             ?>
                                    <li class="menu-item">
                                        <a href="{{route('tri.produit.categorie',[$categorie->id_categorie,$categorie->libelle_categorie])}}">{{$categorie->libelle_categorie}} @if(count($sous_categories)>0)<i class="ion-ios-arrow-right"></i> @endif</a>
										<ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
												@foreach($sous_categories as $sous_categorie)
                                                    <li><a href="{{route('tri.produit.sous_categorie',[$categorie->id_categorie,$sous_categorie->id_sous_categorie,$sous_categorie->libelle_sous_categorie])}}">{{$sous_categorie->libelle_sous_categorie}}</a></li>
												@endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                      
                                    </li>
								  @endforeach
								</ul>
                              
                            </div>
                        </div> -->
                        <div class="col-lg-8">
                        <!-- Slider Start -->
                            <div class="slider-area slider-height-2">
                                <div class="hero-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('css_frontend/images/image1.jpg')}});">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px" >
                                                    <span class="animated color-white" style="color:black">PAYER DANS NOS MAGASINS</span>
                                                    <h1 class="animated color-white" style="color:black">
                                                        Commande <br />
                                                        <strong>Livraison</strong>
                                                    </h1>
                                                    <!-- <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('css_frontend/images/image2.jpg')}});">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white" style="color:black">BT HEADPHONE</span>
                                                    <h1 class="animated color-white" style="color:black">
                                                        Headset <br />
                                                        <strong>Hyper X</strong>
                                                    </h1>
                                                    <!-- <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->

										<!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('css_frontend/images/image3.jpg')}});">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px" >
                                                    <span class="animated color-white" style="color:black">GALAXY WATCH</span>
                                                    <h1 class="animated color-white" style="color:black">
                                                        Pre-Order <br />
                                                        <strong>Exclusive</strong>
                                                    </h1>
                                                    <!-- <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a> -->
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
                        <div class="col-lg-4">
                            <div class="banner-area banner-area-2">
                                <div class="banner-wrapper mb-15px">
                                    <a href="#"><img src="/{{$sliders[0]->image_slider}}" alt="" widht="100%" height="200px"/></a>
                                </div>
                                <div class="banner-wrapper">
                                    <a href="#"><img src="/{{$sliders[1]->image_slider}}" alt="" widht="100%" height="220px"/></a>
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
	<!-- <div class="featured-section" id="projects">
		<div class="container">
			<h3 class="tittle-w3l">Catégories Populaires
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					
					@foreach($categories as $categorie)
					<div class="col-md-3 product-men">
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
							</div>
						</div>
					</li>
					</div>
					@endforeach
					
				</ul>
			</div>
		</div>
	</div> -->
	<!-- //special offers -->

   <!-- top Products -->
	<div class="ads-grid" style="margin-top:-100px">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="font-size:27px;margin-top:40px">Nos produits
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
						<h3 class="heading-tittle" style="font-size:25px">Produits populaires</h3>
						@foreach($produits as $produit)
						<div class="col-md-2 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{$produit->image_produit}}" height="150px" width="200px" class="thumbnail image-resp" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('detail-produit.produit', $produit->id_produit)}}" class="link-product-add-cart">Voir plus</a>
										</div>
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 class="mb">
										<a href="{{route('detail-produit.produit', $produit->id_produit)}}" style="font-size:15px">{{$produit->nom_produit}}</a>
									</h4>
									       <?php
                                              $promotion = \App\Models\Promotion::where(['id_produit' =>$produit->id_produit])->first();
                                             ?>
									<div class="info-product-price">
									   @if($promotion)
										 <?php 
										   $reduction= ($produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										   $prix_ht_promo= $produit->prix_ht_produit - $reduction;
										 ?>
										<span class="item_price" style="font-size:15px;color:red">{{$prix_ht_promo}} F CFA</span>
										<del> <span class="item_price" style="font-size:15px;color:red">{{$produit->prix_ht_produit}} F CFA</span></del>
										@else
									   <span class="item_price" style="font-size:15px;color:red">{{$produit->prix_ht_produit}} F CFA</span>
									    @endif
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item 
									hvr-outline-out">
									@if($produit->quantite_produit>3)
									    <form  method="POST"  action="{{route('cart.store')}}">
                                           {{csrf_field()}}
											<fieldset>
												<input type="hidden" name="id_produit" value="{{$produit->id_produit}}"/>
												<input type="hidden" name="nom_produit" value="{{$produit->nom_produit}}"/>
											@if($promotion)
										    <?php 
										    $reduction= ($produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										    $prix_ht_promo= $produit->prix_ht_produit - $reduction;
										    ?>
                                            @endif
											<input type="hidden" name="prix_produit" value="@if($promotion) {{$prix_ht_promo}} @else {{$produit->prix_ht_produit}} @endif"/>
												<i class="fa fa-cart-arrow-down"></i> <input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button cart-resp" />
											</fieldset>
										</form>
									@else
									<i class="fa fa-cart-arrow-down"></i> <input type="submit" name="submit"  style="font-size:10px;background-color:#a9a9a9" value="Ajouter au panier" class="button cart-resp" />
									@endif
									</div> </br>
									@if($produit->quantite_produit>3)
									<i class="fa fa-check" aria-hidden="true"></i> <span class="item_price" style="font-size:15px;color:black"><b>En Stock</b> </span>
									@else
									<span class="item_price" style="font-size:15px;color:red"><b>En rupture</b> </span>
									@endif
								</div>
							</div>
						</div>
						@endforeach
						
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle" style="font-size:25px">Nouvaux produits</h3>
                        @foreach($nouveau_produits as $nouveau_produit)
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="/{{$nouveau_produit->image_produit}}"  height=150 width=200  alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('detail-produit.produit', $nouveau_produit->id_produit)}}" class="link-product-add-cart">Detail</a>
										</div>
									</div>
									<span class="product-new-top">Neuf</span>

								</div>
								<div class="item-info-product ">
									<h4 class="mb">
										<a href="single.html">{{$nouveau_produit->nom_produit}}</a>
									</h4>
									<?php
									 $promotion = \App\Models\Promotion::where(['id_produit' =>$nouveau_produit->id_produit])->first();
									?>
									   
									<div class="info-product-price">
									   @if($promotion)
										 <?php 
										   $reduction= ($nouveau_produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										   $prix_ht_promo= $produit->prix_ht_produit - $reduction;
										 ?>
										<span class="item_price" style="font-size:15px;color:red">{{$prix_ht_promo}} F CFA</span>
										<del> <span class="item_price" style="font-size:15px;color:red">{{$produit->prix_ht_produit}} F CFA</span></del>
										@else
									   <span class="item_price" style="font-size:15px;color:red">{{$produit->prix_ht_produit}} F CFA</span>
									    @endif
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form  method="POST"  action="{{route('cart.store')}}">
                                         {{ csrf_field() }}
											<fieldset>
												<input type="hidden" name="id_produit" value="{{$produit->id_produit}}"/>
												<input type="hidden" name="nom_produit" value="{{$produit->nom_produit}}"/>
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Almonds, 100g" />
											@if($promotion)
										    <?php 
										    $reduction= ($produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										    $prix_ht_promo= $produit->prix_ht_produit - $reduction;
										    ?>
                                            @endif
											<input type="hidden" name="prix_produit" value="@if($promotion) {{$prix_ht_promo}} @else {{$produit->prix_ht_produit}} @endif"/>
												<i class="fa fa-cart-arrow-down"></i><input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button cart-resp" />
											</fieldset>
										</form>
									</div> </br>
									@if($produit->stock_produit=="En stock")
									<i class="fa fa-check" aria-hidden="true"></i> <span class="item_price" style="font-size:15px;color:black"><b>{{$produit->stock_produit}}</b> </span>
									@else
									<span class="item_price" style="font-size:15px;color:red"><b>{{$produit->stock_produit}}</b> </span>
									@endif
                               </div>
							</div>
						</div>
						@endforeach
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
			@if (Session::has('succes'))
				<div class="form-group">
					<div class="alert alert-success">
						<center>{{ Session::pull('succes') }}</center>
					</div>
				</div>
			@endif
				<h2>Faites livrer vos courses dans les magasins locaux</h2>
				<p>Livraison gratuite sur votre première commande!</p>
				<form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
					<input type="email" placeholder="Laissez nous votre E-mail" name="email" required="">
					<input type="submit" value="Souscrire">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk"><br/><br/><br/>
				<img src="{{asset('css_frontend/images/tab3.jpg')}}" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-5 offer-footer">
					<div class="col-xs-3 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 text-form-footer">
						<h3 style="font-size:20px">Togo, Lomé, quatier Agoè Démakpoè</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-3 offer-footer">
					<div class="col-xs-3 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 text-form-footer">
						<h3 style="font-size:20px">Simple et facile</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3 style="font-size:20px">Satisfait ou rembousser </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
	
@include('footer/footer_frontend')
