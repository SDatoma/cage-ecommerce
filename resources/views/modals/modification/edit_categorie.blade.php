<div class="modal fade" id="mc{{$categorie->id_categorie}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Modification <b style="color:red">{{$categorie->libelle_categorie}}</b></strong></h5></br></br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST" action="{{route('categorie.update',$categorie->id_categorie)}}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Libelle</label>
            <input type="text" class="form-control" id="recipient-name" name="libelle_categorie" value="{{$categorie->libelle_categorie}}" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Photos</label>
            <input type="file" class="form-control" id="recipient-name" name="file">
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