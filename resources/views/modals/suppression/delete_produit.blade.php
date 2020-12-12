<!-- Central Modal Small -->
<div class="modal fade" id="sp{{$produit->id_produit}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form class="form-horizontal" method="POST" action="{{route('produit.destroy',$produit->id_produit)}}">
  @method('DELETE')
  @csrf
   <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <!--Body-->
          <div class="modal-body">
           <strong><p>Supprimer ce produit ? </strong></p>
           <strong style="font-size:20px">{{$produit->nom_produit}} </strong>
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
  