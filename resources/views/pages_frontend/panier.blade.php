
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
                    <h3 class="cart-page-title">Votre panier</h3>
                    <div class="row">
                     @if(ShoppingCart::countRows()==0)
                    <center> <h3 class="cart-page-title" style="color:red">Il n'y a plus d'articles dans votre panier</h3></center>
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
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{$item->qty}}" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">{{$item->total}} FCFA</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <form method="POST" action="{{route('cart.destroy',$item->__raw_id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class=""><i class="icon-close"></i></button>
                                                   </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="#">Continuer l'achat</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button>Mettre a jour le panier</button>
                                                <a href="/empty">Supprimer le panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="cart-tax">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                        </div>
                                        <div class="tax-wrapper">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <div class="tax-select-wrapper">
                                                <div class="tax-select">
                                                    <label>
                                                        * Country
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bangladesh</option>
                                                        <option>Albania</option>
                                                        <option>Åland Islands</option>
                                                        <option>Afghanistan</option>
                                                        <option>Belgium</option>
                                                    </select>
                                                </div>
                                                <div class="tax-select">
                                                    <label>
                                                        * Region / State
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bangladesh</option>
                                                        <option>Albania</option>
                                                        <option>Åland Islands</option>
                                                        <option>Afghanistan</option>
                                                        <option>Belgium</option>
                                                    </select>
                                                </div>
                                                <div class="tax-select mb-25px">
                                                    <label>
                                                        * Zip/Postal Code
                                                    </label>
                                                    <input type="text" />
                                                </div>
                                                <button class="cart-btn-2" type="submit">Get A Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                        </div>
                                        <div class="discount-code">
                                            <p>Enter your coupon code if you have one.</p>
                                            <form>
                                                <input type="text" required="" name="name" />
                                                <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mt-md-30px">
                                    <div class="grand-totall">
                                        <h5>Total Produit<span> {{ShoppingCart::countRows() ?? '0'}}</span></h5>
                                        <h5>Prix Total<span>{{ShoppingCart::total() ?? '0'}} FCFA</span></h5>
                                       
                                        <div class="total-shipping">
                                            <h5>Frais accessoirs</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Livraison <span>0 FCFA</span></li>
                                                <li><input type="checkbox" /> Taxe <span>0%</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="grand-totall-title">Net a payer<span>{{ShoppingCart::totalPrice() ?? '0'}} FCFA</span></h4>
                                        <a href="#">Proceed to Checkout</a>
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
	