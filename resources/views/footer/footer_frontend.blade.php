
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
			<div class="container">
				<!-- footer categories -->
				<div class="col-sm-3 address-right">
					<div class="col-xs-12 footer-grids">
						<h3>Catégories</h3>
						<ul>
							<?php
							  $categories = \App\Models\Categorie::All();
							?>
							@foreach($categories as $categorie)
								<li>
									<a href="{{route('tri.produit.categorie',[$categorie->id_categorie,$categorie->libelle_categorie])}}">{{$categorie->libelle_categorie}}</a>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-3 address-right">
					<div class="col-xs-12 footer-grids">
						<h3>Notre societé</h3>
						<ul>
						
							<li>
								<a href="/politique-confidentialite">Politique de confidentialité</a>
							</li>
							
							<li>
								<a href="/condition-general">Conditions generales de vente ( CGV )</a>
							</li>
							<li>
								<a href="">Les meilleures ventes</a>
							</li>
							<li>
								<a href="/contact">Contact</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-sm-3 address-right">
				<div class="col-xs-12 footer-grids">
						<h3>Contact </h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Lomé, Togo.</li>
							<li>
								<i class="fa fa-phone"></i> +228 70 45 37 85 </li>
							<li>
								<i class="fa fa-phone"></i> +228 96 35 80 90 </li>
							<li>
								<i class="fa fa-mobile"></i> +228 90 90 49 03 </li>
							<li>
								<i class="fa fa-envelope"></i>
								<a href="mailto:cagetogo@gmail.com">cagetogo@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-3 footer-grids  w3l-socialmk">
					<h3>Télécharger l'application sur</h3>
					<div class="agileits_app-devices">
						<h5></h5>
						<a href="#">
							<img src="{{asset('css_frontend/images/1.png')}}" alt="">
						</a>
						<!--a href="#">
							<img src="{{asset('css_frontend/images/2.png')}}" alt="">
						</a-->
						<div class="clearfix"> </div>
					</div>
				</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
			<div class="container">
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5 style="color:black">Mode de paiement</h5>
					<ul>
						<li>
							<img src="{{asset('css_frontend/images/tmoney.jpg')}}" height=40 alt="">
						</li>
						<li>
							<img src="{{asset('css_frontend/images/flooz.jpg')}}" height=40 alt="">
						</li>
						<li>
							<img src="{{asset('css_frontend/images/orabank.jpg')}}" height=40 alt="">
						</li>
						<li>
							<img src="{{asset('css_frontend/images/visa.jpg')}}" height=40 alt="">
						</li>
						<li>
							<img src="{{asset('css_frontend/images/master.png')}}" height=40 alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			</div><br/>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p class="copy-text">Copyright © <a href="https://www.sebi-inc.com/"> SEBI Inc</a>. Tous droits sont réservés.</p>
			
		</div>
	</div>
	<!-- //copyright -->
    <script src="{{asset('css_frontend/js/jquery-2.1.4.min.js')}}"></script>
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
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

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
				alert('Le minimum d\'article dans le panier est 1');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="{{asset('css_frontend/js/jquery-ui.js')}}"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

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

<script>
document.getElementById('recherche').addEventListener('keyup', function(e) {
var recherche = this.value.toLowerCase();
var documents = document.querySelectorAll('.document');

Array.prototype.forEach.call(documents, function(document) {
 // On a bien trouvé les termes de recherche.
 if (document.innerHTML.toLowerCase().indexOf(recherche) > -1) {
   document.style.display = 'block';
 } else {
   document.style.display = 'none';
 }
});
});
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

	<!-- for bootstrap working -->
	<script src="{{asset('css_frontend/js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

     <!-- Vendors JS -->
        <script src="{{asset('css_front_end/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/vendor/jquery-migrate-3.1.0.min.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>

            <!-- Plugins JS -->
         <script src="{{asset('css_front_end/assets/js/plugins/jquery-ui.min.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/plugins/swiper.min.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/plugins/countdown.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/plugins/scrollup.js')}}"></script>
        <script src="{{asset('css_front_end/assets/js/plugins/elevateZoom.js')}}"></script>

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <!-- <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script> -->

        <!-- Main Activation JS -->
        <script src="{{asset('css_front_end/assets/js/main.js')}}"></script>      
  

</body>

</html>