
<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>


<div class="offcanvas-overlay"></div>
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                   <center> <h3 class="cart-page-title">Votre panier comporte <strong style="color:red">{{ShoppingCart::countRows() ?? '0'}}</strong> Produit(s)</h3>
                    <div class="row"></center>
                     @if(ShoppingCart::countRows()==0)
                    <center> 
                    <h3 class="cart-page-title" style="color:red">Il n'y a plus de produit dans votre panier</h3>
                    </center>
                     @else
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                               <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom produit</th>
                                                <th>Prix unitaire</th>
                                                <th>Quantite</th>
                                                <th>Sous total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a  href="#"><img class="img-responsive" src="/{{$item->produit->image_produit}}" width="100px" height="100px" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                                <td class="product-name"><a href="#">{{$item->price}} FCFA</a></td>
                                                <td class="product-quantity">
                                                  {{$item->qty}}
                                                    <!-- <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="" />
                                                    </div> -->
                                                </td>
                                                <td class="product-subtotal">{{$item->total}} FCFA</td>
                                                <td class="product-remove">

                                                    <a href="#" data-toggle="modal" data-target="#eqpp{{$item->__raw_id}}"><i class="icon-pencil"></i></a>

                                                    <form method="POST" action="{{route('cart.destroy',$item->__raw_id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="" style="color:red"><i class="icon-close"></i></button>
                                                   </form>
                                                </td>
                                            </tr>
                                            @include('modals/modification/edit_quantite_produit_panier')
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-clear">
                                                <!-- <button>Mettre a jour le panier</button> -->
                                                <a href="/empty">Supprimer le panier</a>
                                            </div>

                                            <div class="cart-shiping-update">
                                                <a href="/">Continuer l'achat</a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-2 col-md-6 mb-lm-30px">
                                    
                                </div>
                                
                                <div class="col-lg-7 col-md-12 mt-md-30px">
                                    <div class="grand-totall">
                                        <!-- <h5>Total Produit<span> {{ShoppingCart::countRows() ?? '0'}}</span></h5> -->
                                        <h4 class="grand-totall-title" style="color:black">Total Produit<span>{{ShoppingCart::countRows() ?? '0'}}</span></h4>
                                        <h4 class="grand-totall-title" style="color:black">Prix Total<span>{{ShoppingCart::total() ?? '0'}} FCFA</span></h4>
                                       <!-- <div class="total-shipping">
                                            <h5>Frais accessoirs</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Livraison <span>0 FCFA</span></li>
                                                <li><input type="checkbox" /> Taxe <span>0%</span></li>
                                            </ul>
                                        </div> -->
                                        <h4 class="grand-totall-title" style="color:red">Net a payer<span>{{ShoppingCart::total() ?? '0'}} FCFA</span></h4>
                                        @if(Cookie::get('id_user'))
                                        <a href="/checkout">Valider la commande</a>
                                        @else
                                        <a href="#" data-toggle="modal" data-target="#inscription">Valider la commande</a>
                                        @include('modals/ajout/message_inscription')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- cart area end -->
        

	<!-- //fourth section (noodles) -->
	<!-- footer --><div class="product-single-w3l"></div>
	<footer>
		<div class="container">
			<!-- footer second section -->
			
	@include('footer/footer_frontend')
	