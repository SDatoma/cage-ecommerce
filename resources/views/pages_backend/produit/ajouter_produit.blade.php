@extends('header/header_back')


<!-- Main Content -->
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                <h5>ENREGISTRER UN NOUVEAU PRODUIT</h5>
                    <!--<ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ul>-->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                 <!--<div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div> -->
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
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
                            <form id="form_validation" method="POST" action="{{route('produit.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Nom du produit" name="nom_produit" value="{{ old('nom_produit') }}" required>
                                </div>
                                <div class="form-group form-float">
                                    <textarea name="description_produit" cols="30" rows="5" placeholder="Description du produit" class="form-control no-resize" required>{{ old('description_produit') }}</textarea>
                                </div>
                                <div class="form-group form-float">
                                    <textarea name="caracteristique_produit" cols="30" rows="5" placeholder="Caracteristique du produit" class="form-control no-resize" required>{{ old('caracteristique_produit') }}</textarea>
                                </div>
                                <div class="form-group form-float">
                                    <input type="number" min="100" class="form-control" placeholder="Prix du produit" name="prix_produit" value="{{ old('prix_produit') }}" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="number" min="1" class="form-control" placeholder="Quantite en stock" name="quantite_produit" value="{{ old('quantite_produit') }}" required>
                                </div>
                                <div class="form-group form-float">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select" name="id_sous_categorie" required>
                                   <option value="">SOUS CAEGORIE </option>
                                      @foreach($sous_categories as $sous_categorie)
                                       <option value="{{$sous_categorie->id_sous_categorie}}"> {{$sous_categorie->libelle_sous_categorie}} </option>
                                       @endforeach
                                    </select>
                                   
                                </div>

                                <div class="form-group form-float">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select" name="id_boutique" required>
                                   <option value=""> CHOISISSEZ LA BOUTIQUE</option>
                                      @foreach($boutiques as $boutique)
                                       <option value="{{$boutique->id_boutique}}"> {{$boutique->nom_boutique}} </option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select"   name="nouveau_produit" required>
                                       <option value=""> CHOISISSEZ L'ETAT DU PRODUIT</option>
                                       <option value="Nouveau"> Nouveau </option>
                                       <option value="Existant">Existant</option>
                                    </select>
                                </div>
                               
                                <div id="ODayForm">
                                    <div id="add_days">
                                       <div class="form-group form-float col-sm-5">
                                             <input type="file" class="dropify" name="file">
                                       </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-sm-offset-2">
                                    <h4 class="btn btn-succes btn-sm pull-right" onclick="addNewImageForm()"><i class="zmdi zmdi-plus"></i> Photos</h4>
                               </div>

                               <center> <button class="btn btn-raised btn-primary waves-effect " type="submit">Enregistrer</button> </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function addNewImageForm() {
    Njour = 1;
    Njour++;
    var total = $('[name="photo[]"]').length+1
    var form =  document.getElementById('ODayForm')
    
      var fragment = document.createDocumentFragment();
  
      var div = document.createElement('div')
      div.setAttribute('id','add_days'+total)

      var div0 = document.createElement('div')
      div0.setAttribute('class','hr-line-dashed')
       div.appendChild(div0)

      var span = document.createElement('span')
      span.setAttribute('class','float-right del')
      span.setAttribute('onclick',"deleteDayForm('add_days"+total+"')")
      span.innerText='X'
  
      var h6 = document.createElement('h4')
      h6.setAttribute('class','card-title text-center')
      h6.innerText='Photos '+total

      div.appendChild(span)
      div.appendChild(h6)
  
      var div1 = document.createElement('div')
      div1.setAttribute('class','form-group form-float')

       var input1 = document.createElement('input')
       input1.setAttribute('id','photo'+total)
       input1.setAttribute('type','file')
       input1.setAttribute('class','form-control')
       input1.setAttribute('name','photo[]')

       div1.appendChild(input1)
       div.appendChild(div1)

      var span = document.createElement('span')
      span.setAttribute('class','float-right del')
      span.setAttribute('onclick','deleteDayForm()')
      span.innerText='X'
  
     
      fragment.appendChild(div)
      form.appendChild(fragment)
  }


  function deleteDayForm(add_days){
    var supprimer = document.getElementById(add_days);
    supprimer.parentNode.removeChild(supprimer);
  }

  </script>
@endsection()
