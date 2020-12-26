@include('header/header_frontend')

	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/">Accueil</a>
						<i>|</i>
					</li>
					<li>Connexion / Créer compte</li>
				</ul>
			</div>
		</div>
	</div>
    <!-- Breadcrumb Area End-->
            <!-- login area start -->
            <div class="login-register-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4>Connexion</h4>
                                    </a>
                                    <a data-toggle="tab" href="#lg2">
                                        <h4>Créer un compte</h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form"  style="color:#000; text-align : right;">
                                                <form action="#" method="post">
                                                    <div class="col-lg-4">Nom d'utilisateur : </div> <div class="col-lg-8"> <input type="text" name="user-name" placeholder="Nom d'utilisateur" /> </div>
                                                    <div class="col-lg-4">Mot de passe : </div> <div class="col-lg-8"> <input type="password" name="user-password" placeholder="Mot de passe" /> </div>
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox" />
                                                            <a class="flote-none" href="javascript:void(0)">Se souvenir de moi</a>
                                                            <a href="#">Mot de passe oublié ?</a>
                                                        </div>
                                                        <button type="submit"><span>Connexion</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form" style="color:#000; text-align : right;">
                                                <form action="#" method="post">
                                                    <div class="col-lg-4">Civilité (Mr/Mme) : </div> <div class="col-lg-8" style="text-align : left;"> 
													  <input type="radio" name="user-civilite" class="demo6" id="demo6-a" checked><label for="demo6-a">Mr</label>
													  <input type="radio" name="user-civilite" class="demo6" id="demo6-b" ><label for="demo6-b">Mme</label>
																									</div>
                                                    <div class="col-lg-4">Nom : </div> <div class="col-lg-8"> <input type="text" name="user-name" placeholder="Nom " /> </div>
                                                    <div class="col-lg-4">Prénom : </div> <div class="col-lg-8"> <input type="text" name="user-prenom" placeholder="Prénom " /> </div>
                                                    <div class="col-lg-4">Mot de passe : </div> <div class="col-lg-8"> <input type="password" name="user-password" placeholder="Mot de passe" /> </div>
                                                    <div class="col-lg-4">Confirmer mot de passe : </div> <div class="col-lg-8"> <input type="password" name="user-password-confirm" placeholder="Confirmer mot de passe" /> </div>
                                                    <div class="col-lg-4">N° Téléphone : </div> <div class="col-lg-8"> <input name="user-telephone" placeholder="N° Téléphone" type="email" /> </div>
                                                    <div class="col-lg-4">Email : </div> <div class="col-lg-8"> <input name="user-email" placeholder="Email" type="email" /> </div>
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox" />
                                                            <a class="flote-none" href="javascript:void(0)">Recevoir notre newsletter
															Vous pouvez vous désinscrire à tout moment. <br/>Vous trouverez pour 
														cela nos informations de contact dans les conditions d'utilisation du site.</a> <br/><br/>
														<input type="checkbox" />
                                                            <a class="flote-none" href="javascript:void(0)">J'accepte les conditions générales et 
															la politique de confidentialité.</a>
                                                            
                                                        </div>
														<button type="submit"><span>Valider</span></button>
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
			

	<footer>
		<div class="container">
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-5 offer-footer">
					<div class="col-xs-3 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 text-form-footer">
						<h3 style="font-size:20px">Togo, Lomé, quatier Agoè Démakpoè</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-3 offer-footer">
					<div class="col-xs-3 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 text-form-footer">
						<h3 style="font-size:20px">Simple et facile</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3 style="font-size:20px">Satisfait ou rembousser </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			
	@include('footer/footer_frontend')