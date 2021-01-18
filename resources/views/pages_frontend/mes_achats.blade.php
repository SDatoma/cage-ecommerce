
<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>

	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						Accueil
						<i>|</i>
					</li>
					<li><a href="{{route('profil.client',[Cookie::get('id_user')])}}">Mon compte </a><i>|</i> <a href="#">Historiques</a></li>
				</ul>
			</div>
		</div>
	</div>
	
<div class="offcanvas-overlay"></div>
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                   <center> <h3 class="cart-page-title">Historique de vos commandes</h3>
                    <div class="row"></center>
                     
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                               <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom produit</th>
                                                <th>Quantité</th>
                                                <th>Prix total</th>
                                                <th>Date commande</th>
                                                <th>Etat commande</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($commandes as $commande)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a  href="#"><img class="img-responsive" src="/{{$commande->image_produit}}" width="100px" height="100px" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">{{$commande->nom_produit}}</a></td>
                                                <td class="product-name"><a href="#">{{$commande->quantite_commande}} </a></td>
                                                <td class="product-name"><a href="#">{{$commande->prix_commande}} F CFA </a></td>
												<td class="product-name"><a href="#">
												<?php echo $new_date_format = date('d-m-Y', strtotime($commande->date_commande)); ?>
												</a></td>
												<td class="product-subtotal">
												@if($commande->etat_commande == 0)
													<span class="item_price" style="background-color:#a12626; font-size:15px;color:#fff"><b>En attente</b> </span>
												@else
													<span class="badge" style="background-color:#06d755; font-size:15px;color:#fff"><b>Livré</b> </span>
												@endif
												</td>
												
                                                
                                            </tr>
                                            
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                            </form>
                            
                        </div>
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
	