
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
					<li><a href="{{route('profil.client',[Cookie::get('id_user')])}}">Mon compte </a><i>|</i> <a href="#">Informations</a></li>
				</ul>
			</div>
		</div>
	</div>
    <!-- login area start -->
            <div class="login-register-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4>Modifier mes informations</h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
									@if (Session::has('error'))
									<div class="form-group">
										<div class="alert alert-danger">
											<center>{{ Session::pull('error') }}</center>
										</div>
									</div>
									@endif
								@if (Session::has('success'))
									<div class="form-group">
										<div class="alert alert-success">
											<center>{{ Session::pull('success') }}</center>
										</div>
									</div>
								@endif
                                        <div class="login-form-container">
                                            <div class="login-register-form" style="color:#000; text-align : right;">
                                                <form class="form-horizontal" method="POST"  action="{{route('client.update',$user->id_user)}}" enctype="multipart/form-data">
													{{ method_field('PUT') }}
													 {{ csrf_field() }}
													<div class="col-lg-4">Civilité (Mr/Mme) : </div> <div class="col-lg-8" style="text-align : left;"> 
													  <input type="radio" name="usercivilite" value="{{$user->sexe_user}}" class="demo6" id="demo6-a" checked><label for="demo6-a">Mr</label>
													  <input type="radio" name="usercivilite" value="{{$user->sexe_user}}" class="demo6" id="demo6-b" ><label for="demo6-b">Mme</label>
													</div> </br></br>
                                                    <div class="col-lg-4">Nom : </div> <div class="col-lg-8"> <input required type="text" value="{{$user->nom_user}}" name="username" /> </div>
                                                    <div class="col-lg-4">Prénom : </div> <div class="col-lg-8"> <input required type="text" name="userprenom" value="{{$user->prenom_user}}" /> </div>
                                                    <div class="col-lg-4">N° Téléphone : </div> <div class="col-lg-8"> <input required name="usertelephone" value="{{$user->telephone_user}}" type="numeric" /> </div>
                                                    <div class="col-lg-4">Email : </div> <div class="col-lg-8"> <input required name="useremail" value="{{$user->email_user}}" type="email" /> </div>
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox" name="usernews" value="1" />
                                                            <a class="flote-none" href="javascript:void(0)">Recevoir notre newsletter
															Vous pouvez vous désinscrire à tout moment. <br/>Vous trouverez pour 
														cela nos informations de contact dans les conditions d'utilisation du site.</a> <br/><br/>
														<input type="checkbox" name="usercondition" checked required />
                                                            <a class="flote-none" href="javascript:void(0)">J'accepte les conditions générales et 
															la politique de confidentialité.</a>
                                                            
                                                        </div>
														<button type="submit"><span>Modifier</span></button>
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
            <!-- login area end -->
<div class="product-single-w3l"></div>
	<footer>
		<div class="container">
			<!-- footer second section -->
			
			<!-- //footer second section -->
			
	@include('footer/footer_frontend')