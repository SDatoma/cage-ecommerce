
<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>

<div class="header-menu ">
                <div class="container">
                    <div class="row mt-2">
                       
                        <div class="col-md-12">
                        <h3 class="tittle-w3l1" style="font-size:20px;margin-top:12px"><img src="/{{$categoriee->image_categorie}}" height=150 width=200 class="thumbnail" alt="">{{$categoriee->libelle_categorie}}
                           <div class="pull-right">
                               <!-- <label>Recherches : </label> -->
                               <input type="text" id="recherche" class="col-md-8 ml-2 form" placeholder="Rechercher...">
                           </div>
                          </h3>
                           <!-- Slider Start -->
                           <div class="row" id="documents">
                           @foreach($produits as $produit)
						<div class="col-md-3 product-men document" style="margin-top:-15px">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="/{{$produit->image_produit}}" style="margin-left: 30px;" height=150 width=250 class="thumbnail image-resp" alt="">
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
									</div></br>
                                    @if($produit->quantite_produit>3)
									<i class="fa fa-check" aria-hidden="true"></i> <span class="item_price" style="font-size:15px;color:black"><b>En Stock</b> </span>
									@else
									<span class="item_price" style="font-size:15px;color:red"><b>En rupture</b> </span>
									@endif
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
