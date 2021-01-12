
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
	<!-- //page -->
	
	<!-- account area start -->
            <div class="checkout-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto mr-auto col-lg-9">
                            <div class="checkout-wrapper">
                                <div id="faq" class="panel-group">
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>1 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Modifier mes informations personnelles </a></h3>
                                        </div>
                                        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
											@if (Session::has('error'))
												<div class="form-group">
													<div class="alert alert-danger">
														<center>{{ Session::pull('error') }}</center>
													</div>
												</div>
											@endif
											<form class="form-horizontal" method="POST"  action="{{route('client.update',$user->id_user)}}" enctype="multipart/form-data">
												<input type="numeric" name="id" value="1" hidden />
													{{ method_field('PUT') }}
													 {{ csrf_field() }}
                                                <div class="myaccount-info-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Nom</label>
                                                                <input type="text" name="username" value="{{$user->nom_user}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Prénom</label>
                                                                <input type="text" name="userprenom" value="{{$user->prenom_user}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Adresse email</label>
                                                                <input type="email" name="useremail" value="{{$user->email_user}}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>N° Téléphone</label>
                                                                <input type="text" name="usertelephone" value="{{$user->telephone_user}}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="icon-arrow-up-circle"></i> Retour</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Valider</button>
                                                        </div>
                                                    </div>
                                                </div>
											</form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>2 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Changer de mot de passe </a></h3>
                                        </div>
                                        <div id="my-account-2" class="panel-collapse collapse">
                                            <div class="panel-body">
											@if (Session::has('error'))
												<div class="form-group">
													<div class="alert alert-danger">
														<center>{{ Session::pull('error') }}</center>
													</div>
												</div>
											@endif
											<form class="form-horizontal" method="POST"  action="{{route('client.update',$user->id_user)}}" enctype="multipart/form-data">
												 <input type="numeric" name="id" value="2" hidden />
													{{ method_field('PUT') }}
													 {{ csrf_field() }}
                                                <div class="myaccount-info-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Nouveau mot de passe</label>
                                                                <input type="password" name="userpassword"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Confirmer le mot de passe</label>
                                                                <input type="password" name="userpasswordconfirm"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="icon-arrow-up-circle"></i> Retour</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Valider</button>
                                                        </div>
                                                    </div>
                                                </div>
											</form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>3 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-3">Modifier vos adresses </a></h3>
                                        </div>
                                        <div id="my-account-3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>Address Book Entries</h4>
                                                    </div>
                                                    <div class="entries-wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                                <div class="entries-info text-center">
                                                                    <p>Jone Deo</p>
                                                                    <p>hastech</p>
                                                                    <p>28 Green Tower,</p>
                                                                    <p>Street Name.</p>
                                                                    <p>New York City,</p>
                                                                    <p>USA</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                                <div class="entries-edit-delete text-center">
                                                                    <a class="edit" href="#">Edit</a>
                                                                    <a href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="icon-arrow-up-circle"></i> Retour</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Valider</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>4 .</span> <a href="wishlist.html">Consulter l'historique de mes achats </a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- account area end -->
	
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