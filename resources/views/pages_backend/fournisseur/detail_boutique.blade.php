@extends('header/header_back')


<!-- Main Content -->
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <!-- <h2>Ticket Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Project</li>
                        <li class="breadcrumb-item">Ticket</li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ul> -->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i></button>
                </div> -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_4">
                        <div class="body">
                            <div class="img">
                                <img src="/{{$boutique->photos_boutique}}" class="rounded-circle" height="300px" width="450px" alt="profile-image">
                            </div>
                            <div class="user">
                                <h5 class="mt-3 mb-1">{{$boutique->nom_boutique}}</h5>
                                <small class="text-muted">{{$boutique->email_boutique}}</small>
                                <!-- <ul class="list-unstyled mt-3 d-flex">
                                    <li class="mr-3"><strong>Total:-</strong> 13</li>
                                    <li class="mr-3"><strong>Open:-</strong> 4</li>
                                    <li><strong>Closed:-</strong> 9</li>
                                </ul> -->
                                <!-- <div class="progress-container progress-success">
                                    <span class="progress-badge">Statestics</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="progress-value">90%</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <ul class="list-unstyled social-links">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-pinterest"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Adresse - Contact</h2>
                        </div>
                        <div class="body">
                            <small class="text-muted">Pays : </small>
                            <p>{{$boutique->pays_boutique}}</p>
                            <hr>
                            <small class="text-muted">Ville : </small>
                            <p>{{$boutique->ville_boutique}}</p>
                            <hr>
                            <small class="text-muted">Date creation : </small>
                            <p>02 Jan 2019</p>
                            <hr>
                            <small class="text-muted">Contact 1 : </small>
                            <p>{{$boutique->contact_1_boutique}}</p>
                            <hr>
                            <small class="text-muted">Contact 2 : </small>
                            <p>{{$boutique->contact_2_boutique}}</p>
                    
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <h5>Slogan</h5>
                            <span>{{$boutique->slogan_boutique}}</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="body">
                            <h5>Description</h5>
                            <span>{{$boutique->description_boutique}}</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="body">
                            <h5>Ticket</h5>
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="body">
                            <h5>Ticket</h5>
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()
