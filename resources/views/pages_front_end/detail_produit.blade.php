
@extends('header/header_front_end')

@section('content')


<div class="offcanvas-overlay"></div>
    <div class="breadcrumb-area" style="margin-top:-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="/">Accueil</a></li>
                                <li>Détail produit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Shop details Area start -->
            <section class="product-details-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-img product-details-tab">
                                <div class="zoompro-wrap zoompro-2">
                                    <div class="zoompro-border zoompro-span">
                                        <img class="zoompro" src="/{{$produit->image_produit}}" height=400 data-zoom-image="/{{$produit->image_produit}}" alt="non recupéré" />
									</div>
                                </div><br/>
                                <div id="gallery" class="product-dec-slider-2 swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
											<a class="active" data-image="/{{$produit->image_produit}}" height=280 data-zoom-image="/{{$produit->image_produit}}">
												<img class="img-responsive" src="/{{$produit->image_produit}}" alt="" />
											</a>
										</div>
										@foreach($photo_produits as $photo_produitt)
											@if($photo_produitt->id_produit == $produit->id_produit)
												<div class="swiper-slide">
													<a class="active" data-image="/{{$photo_produitt->photo_produit}}" height=280 data-zoom-image="/{{$photo_produitt->photo_produit}}">
														<img class="img-responsive" src="/{{$photo_produitt->photo_produit}}" alt="" />
													</a>
												</div>
											@endif
                                        @endforeach
										
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-content">
                                <h2>{{$produit->nom_produit}}</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="current-price">{{$produit->prix_ht_produit}} F CFA</li>
                                    </ul>
                                </div>
                                <div class="pro-details-list">
                                    <p>{{$produit->description_produit}}</p>
                                    <!--ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style</li>
                                    </ul-->
                                </div>
                                <div class="pro-details-quality mt-0px">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#">  AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>PARTAGER SUR  </span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a title="Whatsapp" href="#"><i class="ion-social-whatsapp"></i></a>
                                            </li>
                                            <li>
                                                <a title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a title="Google+" href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a title="Instagram" href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-policy">
								<h4>Information du vendeur </h4> <br/>
                                    <ul>
                                        <li><img src="{{asset('css_front_end/assets/images/icons/policy.png')}}" alt="" /><span><a href=""> Voir profil du vendeur </a></span></li>
                                        <li><img src="{{asset('css_front_end/assets/images/icons/policy-2.png')}}" alt="" /><span><a href=""> Contacter le vendeur </a></span></li>
                                        <li><img src="{{asset('css_front_end/assets/images/icons/policy-3.png')}}" alt="" /><span><a href=""> Voir tous les produits du vendeur</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Shop details Area End -->
            <!-- product details description area start -->
            <div class="description-review-area mb-60px">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                            <a class="active" data-toggle="tab" href="#des-details2">CARACTERISTIQUES</a>
                            <a data-toggle="tab" href="#des-details3">VOTRE AVIS</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li>{{$produit->caracteristique_produit}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane">
                                <div class="product-description-wrapper">
                                    <p>{{$produit->description_produit}}</p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/1.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
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
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-review child-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/2.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
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
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <input type="submit" value="Submit" />
                                                            </div>
                                                        </div>
                                                    </div>
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
        <!-- Feature Area start -->
        <div class="feature-area single-product-responsive mt-60px mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">VOUS POURRIEZ AUSSI AIMER</h2>
                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        
						@foreach($produits_idem_cats as $produits_idem_ss_cat)
						<!-- Single Item -->
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="{{route('detail-produit.produit', $produits_idem_ss_cat->id_produit)}}" class="thumbnail">
                                        <img class="first-img" src="/{{$produits_idem_ss_cat->image_produit}}" alt="" />
                                        <img class="second-img" src="/{{$produits_idem_ss_cat->image_produit}}" alt="" />
                                    </a>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">Neuf</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>{{$produits_idem_ss_cat->nom_produit}}</span></a>
                                    <h2><a href="single-product.html" class="product-link"> {{$produits_idem_ss_cat->description_produit}}</a></h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut"> {{$produits_idem_ss_cat->prix_ht_produit}} F CFA</li>
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
                        <!-- Single Item -->
                        @endforeach
						
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
        <!-- Feature Area start -->
        <div class="feature-area single-product-responsive  mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="product-decs">DANS LA MEME CATEGORIE</h2>
                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        <!-- Single Item -->
                        
						@foreach($produits_autres_cats as $produits_autres_cat)
								<div class="feature-slider-item swiper-slide">
										<article class="list-product">
											<div class="img-block">
												<a href="single-product.html" class="thumbnail">
													<img class="first-img" src="/{{$produits_autres_cat->image_sous_categorie}}" alt="" />
													<img class="second-img" src="/{{$produits_autres_cat->image_sous_categorie}}" alt="" />
												</a>
											</div>
											<ul class="product-flag">
												<li class="new">Neuf</li>
											</ul>
											<div class="product-decs">
												<a class="inner-link" href="shop-4-column.html"><span>{{$produits_autres_cat->libelle_sous_categorie}}</span></a>
												
												<div class="rating-product">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
												</div><hr/>
												<center><a class="cart-btn" href="#" style="color:red">Consulter </a></center>
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



@endsection()          
