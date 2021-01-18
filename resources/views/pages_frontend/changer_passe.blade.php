
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
					<li><a href="{{route('profil.client',[Cookie::get('id_user')])}}">Mon compte </a><i>|</i> <a href="#">Mot de passe</a></li>
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
                                        <h4>Modifier mot de passe</h4>
                                    </a>
                                </div>
                                <div class="tab-content">
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
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form" style="color:#000; text-align : right;">
                                                <form class="form-horizontal" method="POST"  action="{{route('client.passe_update',$user->id_user)}}">
													{{ method_field('put') }}
													 {{ csrf_field() }}
													 
                                                    <div class="col-lg-4">Ancien mot de passe : </div> <div class="col-lg-8"> <input required type="password" name="lastuserpassword" /> </div>
                                                    <div class="col-lg-4">Nouveau mot de passe : </div> <div class="col-lg-8"> <input required type="password" name="userpassword" /> </div>
                                                    <div class="col-lg-4">Confirmer mot de passe : </div> <div class="col-lg-8"> <input required name="userpasswordconfirm" type="password" /> </div>
                                                    <div class="button-box">
                                                        
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
	
	