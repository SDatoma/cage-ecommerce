@include('header/header_frontend')
<div class="header-menu ">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <div class="header-menu-vertical bg-blue">
                                <h4 class="menu-title be-af-none">Catégories</h4>
                                <ul class="menu-content display-block">
                                  @foreach($categories as $categorie)
                                    <li class="menu-item">
                                        <a href="{{route('tri.produit.categorie',[$categorie->id_categorie,$categorie->libelle_categorie])}}" @if($categorie->id_categorie==$id_categorie)style="color:red" @endif >{{$categorie->libelle_categorie}}<i class="ion-ios-arrow-right"></i></a>
										   <?php
                                              $sous_categories = \App\Models\SousCategorie::where(['id_categorie' =>$categorie->id_categorie])->get();
                                             ?>
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
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-md-10">
                        <h3 class="tittle-w3l1" style="font-size:20px;margin-top:12px"><img src="/{{$sous_categoriee->image_sous_categorie}}" height=150 width=200 class="thumbnail" alt=""> {{$categoriee->libelle_categorie}} ====> <strong style="color:blue">{{$sous_categoriee->libelle_sous_categorie}}</strong> 
                           <div class="pull-right">
                               <!-- <span>Recherches :dfdgf </span> -->
                               <input type="text" id="recherche" class="col-md-8 ml-2 form" placeholder="Rechercher...">
                           </div>
                       </h3>
                           <!-- Slider Start -->
                           <div class="row" id="documents">
                           @foreach($produits as $produit)
						<div class="col-md-3 product-men document" style="margin-top:-15px">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="/{{$produit->image_produit}}" height=150 width=250 class="thumbnail image-resp" alt="">
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
                                    <?php
									 $promotion = \App\Models\Promotion::where(['id_produit' =>$produit->id_produit])->first();
									?>
									<div class="info-product-price">
                                    @if($promotion)
										 <?php 
										   $reduction= ($produit->prix_ht_produit*$promotion->pourcentage_promotion)/100 ; 
										   $prix_ht_promo= $produit->prix_ht_produit - $reduction;
										 ?>
										<span class="item_price" style="font-size:15px">{{$prix_ht_promo}} F CFA</span>
										<del> <span class="item_price" style="font-size:15px">{{$produit->prix_ht_produit}} F CFA</span></del>
										@else
									   <span class="item_price" style="font-size:15px">{{$produit->prix_ht_produit}} F CFA</span>
									    @endif
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
												<input type="submit" name="submit"  style="font-size:10px" value="Ajouter au panier" class="button cart-resp" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
                        @endforeach
                         </div>
                            <!-- Slider End -->
                        </div>
                        
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
               
            </div>

<div class="offcanvas-overlay"></div>
   
@include('footer/footer_frontend')
