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
					<li>CONTACT</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
            <!-- contact area start -->
            <div class="contact-area" style="margin-top:20px; margin-bottom:-150px">
                <div class="container">
                    <div class="custom-row-2">
                        <div class="col-lg-4 col-md-4">
							<div class="contact-info-wrap">
                                <div class="single-contact-info" style="margin-top:-20px">
                                    <div class="contact-icon">
                                        <i class="ion-android-call"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p><a href="tel://+228 70453785">+228 70 45 37 85 </a></p>
                                        <p><a href="tel://+228 90904903">+228 90 90 49 03</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-globe"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p><a href="mailto://cagetogo@gmail.com">cagetogo@gmail.com</a></p>
                                        <p><a href="mailto://cagetogo@yahoo.fr">cagetogo@yahoo.fr</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-pin"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p>Au Togo, Ville Lomé</p>
                                        <p>Quartier Agoè Démakpoè.</p>
                                    </div>
                                </div>
                                <div class="contact-social">
                                    <h3>Partager sur</h3>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="contact-form">
                                <div class="contact-title mb-30">
                                    <h2>Contacter Nous...</h2>
                                </div>
								
								@if (Session::has('succes'))
									<div class="form-group">
										<div class="alert alert-success">
											<center>{{ Session::pull('succes') }}</center>
										</div>
									</div>
								@endif
                                <form class="contact-form-style" id="contact-form" action="{{route('message.store')}}" method="post">
                                     {{ csrf_field() }}
									<div class="row">
                                        <div class="col-lg-6">
                                            <input name="nom" placeholder="Nom*" type="text" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="email" placeholder="Email*" type="email" />
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="objet" placeholder="Objet*" type="text" />
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" placeholder="Votre message*"></textarea>
                                            <button class="submit" type="submit">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div> <br/>
					<div class="contact-map mb-10">
                        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.073573475856!2d1.194249658040794!3d6.244330998870033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTQnMzkuNiJOIDHCsDExJzQzLjIiRQ!5e0!3m2!1sfr!2stg!4v1609349209163!5m2!1sfr!2stg" 
						width="100%" 
						height="500" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    </div>
                    
                </div>
            </div>
            <!-- contact area end -->
        	<footer>
		<div class="container">
			<!-- footer second section -->
			
	@include('footer/footer_frontend')
	