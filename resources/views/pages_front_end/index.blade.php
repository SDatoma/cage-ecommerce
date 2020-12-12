
@extends('header/header_front_end')

@section('content')
<!-- Header Nav End -->
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

        <!-- Feature Area start -->
        <div class="feature-area mt-60px mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">Produits populaires</h2>
                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        <!-- Single Item -->
						
						@foreach($produits as $produit)
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="/detail-produit" class="thumbnail">
                                        <img class="first-img" src="{{$produit->image_produit}}" height=180 alt="" />
                                        <img class="second-img" src="{{$produit->image_produit}}" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/detail-produit" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                            <i class="icon-magnifier icons"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">Neuf</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>{{$produit->nom_produit}}</span></a>
                                    <h2><a href="single-product.html" class="product-link">{{$produit->description_produit}}</a></h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="current-price">{{$produit->prix_ht_produit}} F CFA</li>
                                        </ul>
										<hr/>
										<ul>
                                            <li class="old-price not-cut">En stock</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">Ajouter au panier </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="icon-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
						@endforeach
                        <!-- Single Item -->
						
						
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area mt-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets/images/banner-image/4.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->   
        <!-- New Arrivals area start -->
            <div class="recent-add-area mt-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="section-heading">Nouvelles Arrivées</h2>
                            </div>
                        </div>
                    </div>
                     <div class="recent-slider-two slider-nav-style-1 multi-row">
                        <div class="recent-slider-wrapper swiper-wrapper">
                            
							
                            <!--div class="recent-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{asset('css_front_end/assets/images/product-image/8.jpg')}}" alt="" />
                                            <img class="second-img" src="{{asset('css_front_end/assets/images/product-image/10.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{asset('css_front_end/assets/images/product-image/11.jpg')}}" alt="" />
                                            <img class="second-img" src="{{asset('css_front_end/assets/images/product-image/12.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div-->
							
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div> 
                </div> 
            </div> 
            <!-- New Arrivals area end -->
        <!-- Banner Area Start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="{{asset('css_front_end/assets/images/banner-image/7.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="{{asset('css_front_end/assets/images/banner-image/8.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        
        <!-- category Area Start -->
        <div class="popular-categories-area ptb-60px bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">Catégories populaires</h2>
                        </div>
                    </div>
                </div>
                <div class="category-slider slider-nav-style-1">
                    <div class="category-slider-wrapper swiper-wrapper">
                        
						@foreach($categories as $categorie)
							<div class="category-slider-item swiper-slide">
								<div class="category-slider-bg ">
									<div class="thumb-category">
										<a href="single-product.html">
											<img src="{{asset('css_front_end/assets/images/product-image/2-1.jpg')}}" alt="product-image.jpg" />
										</a>
									</div>
									<div class="category-discript">
										<h4>{{$categorie->libelle_categorie}}</h4>
										<ul>
										@foreach($sous_categories as $sous_categorie)
											@if($sous_categorie->id_categorie == $categorie->id_categorie)
												<li><a href="#">{{$sous_categorie->libelle_sous_categorie}}</a></li>
											@endif
										@endforeach
										</ul>
										<a href="shop-4-column.html" class="view-all-btn">Voir plus</a>
									</div>
								</div>
							</div>
                        @endforeach
						
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- category Area End -->

@endsection()          
