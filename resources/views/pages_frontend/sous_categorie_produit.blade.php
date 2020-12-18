
@include('header/header_frontend')
<div class="header-menu  d-xl-block d-none bg-light-gray">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <div class="header-menu-vertical bg-blue">
                                <h4 class="menu-title be-af-none">Les Catégories</h4>
                                <ul class="menu-content display-block">
                                  @foreach($categories as $categorie)
                                    <li class="menu-item">
                                        <a href="{{route('tri.produit.categorie',$categorie->id_categorie)}}" @if($categorie->id_categorie==$id_categorie)style="color:red" @endif >{{$categorie->libelle_categorie}}<i class="ion-ios-arrow-right"></i></a>
										   <?php
                                              $sous_categories = \App\Models\SousCategorie::where(['id_categorie' =>$categorie->id_categorie])->get();
                                             ?>
										<ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
												@foreach($sous_categories as $sous_categorie)
                                                    <li><a href="{{route('tri.produit.sous_categorie',[$categorie->id_categorie,$sous_categorie->id_sous_categorie])}}">{{$sous_categorie->libelle_sous_categorie}}</a></li>
												@endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
								  @endforeach
								   
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-md-10">
                        <h3 class="tittle-w3l" style="font-size:20px;margin-top:12px">{{$categoriee->libelle_categorie}} ====> <strong style="color:blue">{{$sous_categoriee->libelle_sous_categorie}}</strong> </h3>
                           <!-- Slider Start -->
                           @foreach($produits as $produit)
						<div class="col-md-3 product-men" style="margin-top:-15px">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="/{{$produit->image_produit}}" height=150 width=250 class="thumbnail" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('detail-produit.produit', $produit->id_produit)}}" class="link-product-add-cart">Voir plus</a>
										</div>
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{route('detail-produit.produit', $produit->id_produit)}}" style="font-size:15px">{{$produit->nom_produit}}</a>
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
												<input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
                            <!-- Slider End -->
                        </div>
                        
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
               
            </div>

<div class="offcanvas-overlay"></div>
   
@include('footer/footer_frontend')
