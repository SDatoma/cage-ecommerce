
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
					<li><a href="{{route('profil.client',[Cookie::get('id_user')])}}">Mon compte </a><i>|</i> <a href="#">Mes Adresses</a></li>
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
                                        <h4>Modifier mon adresse</h4>
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
                                                <form class="form-horizontal" method="POST"  action="{{route('adresse.update',$adresse->id_adresse)}}" enctype="multipart/form-data">
													{{ method_field('PUT') }}
													 {{ csrf_field() }}
													 
                                                    <div class="col-lg-4">Ville : </div> <div class="col-lg-8"> <input required type="text" value="{{$adresse->ville_adresse}}" name="ville" /> </div>
                                                    <div class="col-lg-4">Pays : </div> <div class="col-lg-8"> <input required type="text" name="pays" value="TOGO" /> </div>
                                                    <div class="col-lg-4">Description précise : </div> <div class="col-lg-8"> <input required value="{{$adresse->description_adresse}}" name="description" type="numeric" /> </div>
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
            <!-- login area end --><div class="product-single-w3l"></div>

	<footer>
		<div class="container">
			<!-- footer second section -->
			
			<!-- //footer second section -->
			
	@include('footer/footer_frontend')