<div class="modal fade" id="msc{{$sous_categorie->id_sous_categorie}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Modification sous categorie ( {{$categorie->libelle_categorie}} )</strong></h5></br></br>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <form  method="POST" action="{{route('sous_categorie.update',$sous_categorie->id_sous_categorie)}}">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Libelle</label>
            <input type="text" class="form-control" name="libelle_sous_categorie" value="{{$sous_categorie->libelle_sous_categorie}}" required="">
          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Mettre à jour</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

    </form>

  </div>
</div>