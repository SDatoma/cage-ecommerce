@extends('header/header_back')
@section('content')
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Statistique des stocks</h2>
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">eCommerce</li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul> -->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div> -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                    <div class="card">
                        <div class="body">                            
                            <p>Produits</p>
                            <div class="d-flex bd-highlight text-center mt-4">
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted" style="color:green">En stock</small>
                                    <h5 class="mb-0">0</h5>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted" style="color:red">En rupture</small>
                                    <h5 class="mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                    <div class="card">
                        <div class="body">                            
                            <!-- <input type="text" class="knob" value="81" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#ee2558" readonly> -->
                            <p>Boutiques</p>
                            <div class="d-flex bd-highlight text-center mt-4">
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted">Interieurs</small>
                                    <h5 class="mb-0">0</h5>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted">Exterieurs</small>
                                    <h5 class="mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                    <div class="card">
                        <div class="body">                            
                            <!-- <input type="text" class="knob" value="62" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#8f78db" readonly> -->
                            <p>Investiment</p>
                            <div class="d-flex bd-highlight text-center mt-4">
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted">Internal</small>
                                    <h5 class="mb-0">25<small>(-23%)</small></h5>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted">External</small>
                                    <h5 class="mb-0">12<small>(+150%)</small></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                    <div class="card">
                        <div class="body">                            
                            <!-- <input type="text" class="knob" value="38" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#f67a82" readonly> -->
                            <p>Revenue</p>
                            <div class="d-flex bd-highlight text-center mt-4">
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted">Inbound</small>
                                    <h5 class="mb-0">15K</h5>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <small class="text-muted">Outbound</small>
                                    <h5 class="mb-0">2K</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><b>LES PRODUITS EN RUPTURE</b></h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover c_table">
                                <thead>
                                    <tr>
                                        <th style="width:60px;">IMAGE</th>
                                        <th>NOM PRODUIT</th>
                                        <th>Item</th>
                                        <th>Address</th>
                                        <th>Quantity</th>                                    
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Hossein</td>
                                        <td>IPONE-7</td>
                                        <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                        <td>3</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Camara</td>
                                        <td>NOKIA-8</td>
                                        <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                        <td>3</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Maryam</td>
                                        <td>NOKIA-456</td>
                                        <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                        <td>4</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Micheal</td>
                                        <td>SAMSANG PRO</td>
                                        <td>508 Virginia Street Chicago, IL 60653</td>
                                        <td>1</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Frank</td>
                                        <td>NOKIA-456</td>
                                        <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                        <td>13</td>
                                        <td><span class="badge badge-warning">PENDING</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</section>

@endsection()
