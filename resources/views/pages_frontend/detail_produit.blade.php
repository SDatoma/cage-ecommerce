@include('header/header_frontend')


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
									<img src="/{{$produit->image_produit}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							@foreach($photo_produits as $photo_produit)
								<li data-thumb="/{{$photo_produit->photo_produit}}" style="height:100px; width:200px">
									<div class="thumb-image">
										<img src="/{{$photo_produit->photo_produit}}" data-imagezoom="true" class="img-responsive" alt="" > 
									</div>
								</li>
                            @endforeach
								
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3 style="font-size:20px">{{$produit->nom_produit}} </h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<p>
					<span class="item_price">{{$produit->prix_ht_produit}} F CFA</span>
				</p>
				
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>
						<label>Description</label>
					</p>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>
						{{$produit->description_produit}}
					</p>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>
						<label>Caractéristiques</label>
					</p>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>
						{{$produit->caracteristique_produit}}
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
								<input type="hidden" name="amount" value="950.00" />
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
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="font-size:25px">Dans la même sous catégorie
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
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="{{$produits_idem_ss_cat->nom_produit}}" />
											<input type="hidden" name="amount" value="220.00" />
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
						<h3 class="heading-tittle" style="font-size:25px">Nouvelles Arrivées</h3>
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
												<i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <input type="submit" name="submit" style="font-size:10px" value="Ajouter au panier" class="button" />
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

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

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