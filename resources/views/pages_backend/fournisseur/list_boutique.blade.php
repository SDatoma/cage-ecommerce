@extends('header/header_back')


<!-- Main Content -->
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                   <h5>LISTE DES BOUTIQUES</h5>
                    <!-- 
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Normal Tables</li>
                    </ul> -->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div> -->
            </div>
        </div>

        <div class="container-fluid">
           <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="header">
                            <h2>LISTE DES FOURNISSEURS</h2>
                        </div> -->
                        @if(Session::has('succes'))
                            <div class="form-group">
                              <div class="alert alert-success text-center">
                                  <p style="font-size:15px;text-aligne:center">{{Session::pull('succes')}} </p>
                               </div>
                            </div>
                        @elseif(Session::has('error'))
                            <div class="form-group">
                              <div class="alert alert-danger text-center">
                                  <p style="font-size:15px;text-aligne:center">{{Session::pull('error')}} </p>
                               </div>
                           </div>
                        @endif

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover theme-color dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>PHOTOS</th>
                                            <th>NOM</th>
                                            <th>SLOGAN</th>
                                            <th>EMAIL</th>
                                            <th>CONTACT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($boutiques as $boutique)
                                        <tr>
                                            <td><img src="/{{$boutique->photos_boutique}}" width="48" alt="Boutique img"></td>
                                            <td>{{$boutique->nom_boutique}}</td>
                                            <td>{{$boutique->slogan_boutique}}</td>
                                            <td>{{$boutique->email_boutique}}</td>
                                            <td>{{$boutique->contact_1_boutique}} / {{$boutique->contact_2_boutique}}</td>
                                            <td>
                                             
                                            <a href="{{route('fournisseur.show',$boutique->id_boutique)}}"><button class="btn btn-succes btn-sm" title="Detail"  data-toggle="modal" data-target="#"><i class="zmdi zmdi-eye"></i></i></button></a> 

                                            <button class="btn btn-primary btn-sm" title="Modifier" data-toggle="modal" data-target="#mb{{$boutique->id_boutique}}"><i class="zmdi zmdi-edit"></i></button> 

                                            <button class="btn btn-danger btn-sm" title="Supprimer" data-toggle="modal" data-target="#sb{{$boutique->id_boutique}}"><i class="zmdi zmdi-delete"></i></button>
                                            
                                            </td>
                                             @include('modals/suppression/delete_boutique')
                                        </tr>
                                             @include('modals/modification/edit_boutique')
                                    @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection()
