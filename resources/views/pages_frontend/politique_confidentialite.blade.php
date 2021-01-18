<?php
if (Cookie::get('id_user')== null)
  {	?>
	@include('header/header_frontend')
<?php } else{?>
	@include('header/header_frontend_con')
<?php } ?>

   <!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/">ACCUEIL</a>
						<i>|</i>
					</li>
					<li>POLITIQUE DE CONFIDENTIALITE</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
            <!-- contact area start -->
			<div class="container"><br/>
        <div class="product-sec1">
 <div class="contact-area ml-5" style="margin-top:20px; margin-bottom:0px">
 <center> <h4>POLITIQUE DE CONFIDENTIALITE</h4></center> </br>                  
<h4 style="color:blue">Informatique et liberté</h5> 
<p style="color:black; text-align:justify">
Vous disposez d'un droit d'accès et de rectification aux données vous concernant conformément à la loi. Vous pouvez exercer ce droit en envoyant un courrier à l'adresse suivante : 05 BP 1144 Lomé 05 ou directement sur notre site <strong style="color:red">www.</strong> En vous inscrivant sur ce site, vous vous engagez à nous fournir des informations sincères et véritables vous concernant. En fonction de vos choix émis lors de la création ou de la consultation de votre compte, vous serez susceptible de recevoir des offres de notre société. Si vous ne le souhaitez plus, vous pouvez à tout moment nous en faire la demande via notre espace client ou en nous écrivant à l'adresse ci-dessus.
</p></br></br>

<h4 style="color:blue">Cookies</h4>
<p style="color:black; text-align:justify">
Pour des besoins de statistiques et d'affichage nous vous informons que des cookies enregistrent certaines informations qui sont stockées dans la mémoire de votre disque dur. Ces cookies nous permettent aussi de vous proposer les offres les plus adaptées à vos besoins et cela en fonction des produits que vous avez déjà sélectionnés lors de précédentes visites. Ces cookies ne contiennent pas d'informations confidentielles vous concernant.
Propriété intellectuelle
L'ensemble du contenu du site www (illustrations, textes, libellés, marques, images, vidéos) est de la propriété de CAGE. Toute reproduction partielle ou totale du contenu doit faire l'objet d'une demande d'autorisation préalable auprès du CAGE, la reproduction sans autorisation pouvant constituer une contrefaçon sanctionnée pénalement.
</p>


            </div>
            </div>
            </div>
            <!-- contact area end -->
        	<footer>
		<div class="container">
			<!-- footer second section -->
			
	@include('footer/footer_frontend')
	