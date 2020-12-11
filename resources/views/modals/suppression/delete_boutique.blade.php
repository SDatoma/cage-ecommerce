<!-- Central Modal Small -->
<div class="modal fade" id="sb{{$boutique->id_boutique}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form class="form-horizontal" method="POST" action="{{route('fournisseur.destroy',$boutique->id_boutique)}}">
  @method('DELETE')
     @csrf
   <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          
          <!--Body-->
          <div class="modal-body">
           <strong><p>Supprimer cette boutique ? </strong></p>
           <strong style="font-size:20px">{{$boutique->nom_boutique}} </strong>
          </div>
          <!--Footer-->
               <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-sm">Oui</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Non</button>
                </div>
        </div>

        </form>
        <!--/.Content-->
      </div>
    </div>
  