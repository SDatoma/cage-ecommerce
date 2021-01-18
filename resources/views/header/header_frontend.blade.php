<!DOCTYPE html>
<html lang="fr">

<head>
	<title>CAGE BATIMENT | ACCUEIL</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=" " />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!--//tags -->
	<link href="{{asset('css_frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css_frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css_frontend/css/font-awesome.css')}}" rel="stylesheet">
	<!--pop-up-box-->
	<link href="{{asset('css_frontend/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="{{asset('css_frontend/css/jquery-ui1.css')}}">
	<!-- fonts 
	<!-- flexslider -->
	<link rel="stylesheet" href="{{asset('css_frontend/css/flexslider.css')}}" type="text/css" media="screen" />
	
	<link rel="stylesheet" href="{{asset('css_front_end/assets/css/vendor/vendor.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css_front_end/assets/css/plugins/plugins.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css_front_end/assets/css/style.min.css')}}">

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Bienvenue sur la plateforme de vente en ligne de CAGE BÄTIMENT</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="/">
						<span>CAGE</span>
						<span>BÄT</span>IMENT
						<img src="{{asset('css_frontend/images/logo2.png')}}" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul >
					<li style="width:150px">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span>Togo, Lomé, Agoè Démakpoè</a>
					</li>
					<li style="width:150px">
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Livraison partout au Togo</a>
					</li>
					<li style="width:170px">
						<span class="fa fa-phone" aria-hidden="true"></span> +228 70 45 37 85 | 96 35 80 90 |90 90 49 03
					</li>
					<li style="width:260px">
						<a href="/login">
						<span class="fa fa-unlock-alt" aria-hidden="true"></span>Connexion ou
						<span class="fa fa-pencil-square-o" aria-hidden="true"></span>Inscription
						</a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="{{route('recherche.produit')}}" method="post">
					  {{csrf_field()}}
						<input name="recherche" type="text" placeholder="Rechercher un produit ... " required="" style="height:39px;border:1px solid black;width:250px;color:black">
						<button type="submit" class="btn btn-default" aria-label="Left Align" style="height:39px;margin-bottom:3px">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						 <a href="/panier">
							<button class="w3view-cart" type="submit" name="submit" value="" style="height:30px;width:40px">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						 
							<strong style="color:black"> Panier : {{ShoppingCart::countRows() ?? '0'}} Produits - {{ShoppingCart::total() ?? '0'}} FCFA </strong>
						</a>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	
	
<!-- Header Nav End -->
            <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-3 custom-col-2">
                            <div class="header-menu-vertical">
                                <h4 class="menu-title">Catégories</h4>
                                <ul class="menu-content display-block">
								<?php
								  $categories = \App\Models\Categorie::All();
								?>
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
                               
                            </div> -->
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-12">
                            <div class="header-horizontal-menu" >
                                <ul class="menu-content" style="font-size:3px">
                                    <li><a href="/" style="color:black"><i class="ion-ios-home" style="font-size:20px"></i> Accueil </a></li>
									@foreach($categories as $categorie)
								            <?php
                                              $sous_categories = \App\Models\SousCategorie::where(['id_categorie' =>$categorie->id_categorie])->get();
                                             ?>
                                    <li class="menu-dropdown">
									<a href="{{route('tri.produit.categorie',[$categorie->id_categorie,$categorie->libelle_categorie])}}" @if($categorie->id_categorie==$id_categorie)style="color:red" @endif >{{$categorie->libelle_categorie}} @if(count($sous_categories)>0)<i class="ion-ios-arrow-down"></i>@endif</a>
                                        <ul class="main-sub-menu">
										@foreach($sous_categories as $sous_categorie)
                                                    <li>
													<a href="{{route('tri.produit.sous_categorie',[$categorie->id_categorie,$sous_categorie->id_sous_categorie,$sous_categorie->libelle_sous_categorie])}}">{{$sous_categorie->libelle_sous_categorie}}</a>
													</li>
                                        @endforeach
                                        </ul>
                                    </li>
									@endforeach
                                   <li><a href="/contact" style="color:black">contact </a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- header menu -->
	<!-- Header Nav End -->
	    <!-- Mobile Header Section Start -->
    <div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none"  data-number="3"><i class="icon-heart"></i></a>Menu
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->
            </div>
        </div>
    </div>
	
	
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="offcanvas-menu-search-form">
                <form action="{{route('recherche.produit')}}" method="post">
					  {{csrf_field()}}
                    <input name="recherche" type="text" required placeholder="Rechercher ...">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul class="menu-content">
					<li><a href="/" style="color:#ff5722"><i class="ion-ios-home" style="font-size:20px"></i> Accueil </a></li>
					@foreach($categories as $categorie)
							<?php
							  $sous_categories = \App\Models\SousCategorie::where(['id_categorie' =>$categorie->id_categorie])->get();
							 ?>
					<li class="menu-dropdown">
					<a href="{{route('tri.produit.categorie',[$categorie->id_categorie,$categorie->libelle_categorie])}}">{{$categorie->libelle_categorie}} @if(count($sous_categories)>0)<i class="ion-ios-arrow-down"></i>@endif</a>
						<ul class="main-sub-menu">
						@foreach($sous_categories as $sous_categorie)
									<li>
									<a href="{{route('tri.produit.sous_categorie',[$categorie->id_categorie,$sous_categorie->id_sous_categorie,$sous_categorie->libelle_sous_categorie])}}">{{$sous_categorie->libelle_sous_categorie}}</a>
									</li>
						@endforeach
						</ul>
					</li>
					@endforeach
				   <li><a href="">contact </a></li>
				</ul>
            </div>
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li>
                        <a href="#"><i class="icon-social-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->
	
	<!-- Search Category End -->
    <div class="mobile-category-nav d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i>Catégories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu" style="height:300px">
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
                                        <!-- sub menu -->
                                    </li>
								  @endforeach
								</ul>
                        </nav>
                    </div>
                    <!--=======  End of category menu =======-->
                </div>
            </div>
        </div>
    </div>

	@include('sweetalert::alert')
    <!-- Mobile Header Section End -->