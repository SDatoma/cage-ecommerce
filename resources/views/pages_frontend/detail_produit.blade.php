
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
					<li>Détail produit</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits" style="margin-top:0px">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="font-size:25px">Détail du produit <span style="color:red">{{$produit->nom_produit}}</span>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="/{{$produit->image_produit}}" style="height:300px; width:300px">
								<div class="thumb-image">
									<img src="/{{$produit->image_produit}}" style="height:300px; width:300px" data-imagezoom="true" class="img-responsive" alt=""></div>
							</li>
							@foreach($photo_produits as $photo_produit)
								<li data-thumb="/{{$photo_produit->photo_produit}}">
									<div class="thumb-image">
										<img src="/{{$photo_produit->photo_produit}}" 
										data-imagezoom="true" class="img-responsive" alt=""> 
									</div>
								</li>
                            @endforeach
							
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3 style="font-size:20px"> {{$produit->nom_produit}} </h3>
				
				@if($promotion)
					<p><b style="color:red">TAUX DE REDUCTION : {{$promotion->pourcentage_promotion ?? '0'}} % </b> <br/>
						<?php 
						   $reduction= ($produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
						   $prix_ht_promo= $produit->prix_ht_produit - $reduction;
						 ?>
						<label>PRIX_HT :</label><span class="item_price" style="font-size:15px;color:red"> {{$prix_ht_promo}} F CFA</span>
						<del> <span class="item_price" style="font-size:15px;color:red"> {{$produit->prix_ht_produit}} F CFA</span></del>
						
					</p>	
				@else
						<p>
					    <label>PRIX_HT :</label><span class="item_price" style="font-size:15px;color:red"> {{$produit->prix_ht_produit}} F CFA</span>
						</p>
				@endif
				<p>
				<label>ETAT DU PRODUIT :</label> @if($produit->quantite_produit>3)
									<i class="fa fa-check" aria-hidden="true"></i> <span class="item_price" style="font-size:15px;color:black"><b>En Stock</b> </span>
									@else
									<span class="item_price" style="font-size:15px;color:red"><b>En rupture</b> </span>
									@endif <br/>
				<label>FOURNISSEUR :</label> <span class="item_price">{{$produit->nom_boutique}} </span> </p>
				       <div class="occasion-cart">
				            	<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								@if($produit->quantite_produit>3)
					                  <form  method="POST"  action="{{route('cart.store')}}">
                                         {{ csrf_field() }}
											<fieldset>
												<input type="hidden" name="id_produit" value="{{$produit->id_produit}}"/>
												<input type="hidden" name="nom_produit" value="{{$produit->nom_produit}}"/>
												<input type="hidden" name="business" value="" />
												<input type="hidden" name="item_name" value="Almonds, 100g" />
											@if($promotion)
										    <?php 
										    $reduction= ($produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										    $prix_ht_promo= $produit->prix_ht_produit - $reduction;
										    ?>
                                            @endif
											<input type="hidden" name="prix_produit" value="@if($promotion) {{$prix_ht_promo}} @else {{$produit->prix_ht_produit}} @endif"/>
												<input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button cart-resp" />
											</fieldset>
										</form>
								@else
								<input type="submit" name="submit"  style="font-size:10px;background-color:#a9a9a9" value="Ajouter au panier" class="button cart-resp" />
								@endif
					            </div>

				      </div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- product details description area start -->
            <div class="description-review-area mb-60px">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a class="active" data-toggle="tab" href="#des-details1" style="font-size:15px">DESCRIPTION</a>
                            <a  data-toggle="tab" href="#des-details2" style="font-size:15px">CARACTERISTIQUES</a>
                            <a data-toggle="tab" href="#des-details3" style="font-size:15px">COMMENTAIRES</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper">
                                    <p> {{$produit->description_produit}} </p>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane">
                                <div class="product-description-wrapper">
                                    <p> {{$produit->caracteristique_produit}} </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-7">
									     @if(count($commentaires)==0)
                                          <h4 style="color:red"> Il n’y pas encore d’avis. </h4>
									    @else
									   @foreach($commentaires as $commentaire)
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
												<img  class="img-circle" src="{{asset('css_frontend/images/avatar.jpg')}}" alt="" widht="100%" height="80px">
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>{{$commentaire->nom_commentaire}}</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
														<a href="#" data-toggle="modal" data-target="#r{{$commentaire->id_commentaire}}">Reply</a>
														@include('modals/ajout/add_commentaire')
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
														{{$commentaire->resume_commentaire}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

											@foreach($commentaires_parent as $parent)
                                                @if($parent->commentaire_parent==$commentaire->id_commentaire)
                                            <div class="single-review child-review">
                                                <div class="review-img">
												<img  class="img-circle" src="{{asset('css_frontend/images/avatar.jpg')}}" alt="" widht="100%" height="80px">
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>{{$parent->nom_commentaire}}</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div> -->
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>{{$parent->resume_commentaire}}</p>
                                                    </div>
                                                </div>
                                            </div>
											 @endif
											 </br>
											@endforeach

                                        </div>
										</br>
										@endforeach
										@endif
                                    </div>
								    
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h2>Votre avis</h2> </br>
                                            <div class="ratting-form">
											   <form  method="POST"  action="{{route('commentaire.store')}}">
                                                  {{csrf_field()}}
												  @if(Cookie::get('id_user'))
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="nom" name="nom" value="{{Cookie::get('nom_user')}}" required="" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email"  value="{{Cookie::get('email_user')}}" name="email" required="" type="email" />
                                                            </div>
														</div>
														<input  name="id_produit" value="{{$produit->id_produit}}" type="hidden"/>
														<input type="hidden" class="form-control"  name="parent" required="" value="0" required="">
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="resume" required="" placeholder="Message"></textarea>
                                                                <input type="submit" value="Poster"/>
                                                            </div>
                                                        </div>
                                                    </div>
													@else
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="nom" name="nom" required="" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" name="email" required="" type="email" />
                                                            </div>
														</div>
														<input  name="id_produit" value="{{$produit->id_produit}}" type="hidden"/>
														<input type="hidden" class="form-control"  name="parent" required="" value="0" required="">
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="resume" required="" placeholder="Message"></textarea>
                                                                <input type="submit" value="Poster"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product details description area end -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="font-size:25px">Produits de la même catégorie
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					@foreach($produits_idem_cats as $produits_idem_ss_cat)
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="{{route('detail-produit.produit', $produits_idem_ss_cat->id_produit)}}">
									<img src="/{{$produits_idem_ss_cat->image_produit}}" height=250 width=350 alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="{{route('detail-produit.produit', $produits_idem_ss_cat->id_produit)}}">{{$produits_idem_ss_cat->nom_produit}}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>{{$produits_idem_ss_cat->prix_ht_produit}} F CFA</h6>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								@if($produits_idem_ss_cat->quantite_produit>3)
									    <form  method="POST"  action="{{route('cart.store')}}">
                                           {{csrf_field()}}
											<fieldset>
												<input type="hidden" name="id_produit" value="{{$produits_idem_ss_cat->id_produit}}"/>
												<input type="hidden" name="nom_produit" value="{{$produits_idem_ss_cat->nom_produit}}"/>
											@if($promotion)
										    <?php 
										    $reduction= ($produits_idem_ss_cat->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										    $prix_ht_promo= $produits_idem_ss_cat->prix_ht_produit - $reduction;
										    ?>
                                            @endif
											<input type="hidden" name="prix_produit" value="@if($promotion) {{$prix_ht_promo}} @else {{$produits_idem_ss_cat->prix_ht_produit}} @endif"/>
											<input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button cart-resp" />
											</fieldset>
										</form>
									@else
									<input type="submit" name="submit"  style="font-size:10px;background-color:#a9a9a9" value="Ajouter au panier" class="button cart-resp" />
									@endif
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
	<!-- fourth section (noodles) --><div class="featured-section" id="projects">
		<div class="container">
					<div class="product-sec1">
						<h3 class="heading-tittle" style="font-size:25px">Nouveaux produits</h3>
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
									@if($nouveau_produit->quantite_produit>3)
									    <form  method="POST"  action="{{route('cart.store')}}">
                                           {{csrf_field()}}
											<fieldset>
												<input type="hidden" name="id_produit" value="{{$nouveau_produit->id_produit}}"/>
												<input type="hidden" name="nom_produit" value="{{$nouveau_produit->nom_produit}}"/>
											@if($promotion)
										    <?php 
										    $reduction= ($nouveau_produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										    $prix_ht_promo= $nouveau_produit->prix_ht_produit - $reduction;
										    ?>
                                            @endif
											<input type="hidden" name="prix_produit" value="@if($promotion) {{$prix_ht_promo}} @else {{$nouveau_produit->prix_ht_produit}} @endif"/>
												<i class="fa fa-cart-arrow-down"></i> <input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button cart-resp" />
											</fieldset>
										</form>
									@else
									<i class="fa fa-cart-arrow-down"></i> <input type="submit" name="submit"  style="font-size:10px;background-color:#a9a9a9" value="Ajouter au panier" class="button cart-resp" />
									@endif
									</div> </br>
									@if($nouveau_produit->quantite_produit>3)
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
					</div>
					</div>
					<!-- //fourth section (noodles) -->
	<!-- footer --><div class="product-single-w3l"></div>
	<footer>
		<div class="container">
			<!-- footer second section -->
			
	@include('footer/footer_frontend')
	
	<!-- js-files -->
	<!-- jquery -->
	<script src="{{asset('css_frontend/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="{{asset('css_frontend/js/jquery.magnific-popup.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="{{asset('css_frontend/js/minicart.js')}}"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 1) {
				alert('Ajouter au moins 1 produit dans le panier. Merci');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->


	<!-- smoothscroll -->
	<script src="{{asset('css_frontend/js/SmoothScroll.min.js')}}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{asset('css_frontend/js/move-top.js')}}"></script>
	<script src="{{asset('css_frontend/js/easing.js')}}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- imagezoom -->
	<script src="{{asset('css_frontend/js/imagezoom.js')}}"></script>
	<!-- //imagezoom -->

	<!-- FlexSlider -->
	<script src="{{asset('css_frontend/js/jquery.flexslider.js')}}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- flexisel (for special offers) -->
	<script src="{{asset('css_frontend/js/jquery.flexisel.js')}}"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- for bootstrap working -->
	<script src="{{asset('css_frontend/js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->