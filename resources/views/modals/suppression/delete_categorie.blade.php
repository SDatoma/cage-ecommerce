<!-- Central Modal Small -->
<div class="modal fade" id="sc{{$categorie->id_categorie}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form class="form-horizontal" method="POST" action="{{route('categorie.destroy',$categorie->id_categorie)}}">
  @method('DELETE')
     @csrf
   <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          
          <!--Body-->
          <div class="modal-body">
           <strong><p>Supprimer cette Categorie ? </strong></p>
           <strong style="font-size:20px">{{$categorie->libelle_categorie}}</strong>
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
  