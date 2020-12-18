<div class="modal fade" id="sous-c{{$categorie->id_categorie}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Sous categorie =====></strong> <b style="color:blue">{{$categorie->libelle_categorie}}</b></h5></br></br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST" action="{{route('sous_categorie.store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Libelle</label>
            <input type="text" class="form-control" id="recipient-name" name="libelle_sous_categorie" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Photos</label>
            <input type="file" class="form-control" id="recipient-name" name="file">
          </div>
          <input type="hidden" class="form-control" name="id_categorie" value="{{$categorie->id_categorie}}" required="">
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Enregistrer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

    </form>

  </div>
</div>