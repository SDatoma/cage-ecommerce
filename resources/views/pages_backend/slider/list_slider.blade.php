@extends('header/header_back')
<!-- Main Content -->
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                       <h5>LISTE DES SLIDER</h5>
                            <div class="pull-right mt-4">
                               <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#slider">
                                   <i class="zmdi zmdi-plus"></i> Ajouter une image
                               </button>
                            </div>
                            @include('modals/ajout/ajouter_slider')
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
                                           <th>IMAGE</th>
                                            <th>TEXTE D'ACCROCHE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>
                                           <td><img src="/{{$slider->image_slider}}" width="48" alt="Categorie img"></td>
                                            <td>{{$slider->text_slider}}</td>
                                            <td>
                                             <button class="btn btn-primary btn-sm" title="Modifier" data-toggle="modal" data-target="#ms{{$slider->id_slider}}"><i class="zmdi zmdi-edit"></i></button> 
 
                                             <button class="btn btn-danger btn-sm" title="Supprimer" data-toggle="modal" data-target="#ss{{$slider->id_slider}}"><i class="zmdi zmdi-delete"></i></button>
                                             
                                             </td>
                                             @include('modals/suppression/delete_slider')
                                         </tr>
                                              @include('modals/modification/edit_slider')
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
