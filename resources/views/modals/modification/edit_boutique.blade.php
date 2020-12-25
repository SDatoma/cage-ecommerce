<div class="modal fade" id="mb{{$boutique->id_boutique}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST"  action="{{route('fournisseur.update',$boutique->id_boutique)}}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom </label>
            <input type="text" class="form-control" id="recipient-name" name="nom_boutique" value="{{$boutique->nom_boutique}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Slogan</label>
            <input type="text" class="form-control" id="recipient-name" name="slogan_boutique" value="{{$boutique->slogan_boutique}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pays</label>
            <input type="text" class="form-control" id="recipient-name" name="pays_boutique" value="{{$boutique->pays_boutique}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ville </label>
            <input type="text" class="form-control" id="recipient-name" name="ville_boutique" value="{{$boutique->ville_boutique}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-name" name="email_boutique" value="{{$boutique->email_boutique}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact 1</label>
            <input type="text" class="form-control" id="recipient-name" name="contact_boutique1" value="{{$boutique->contact_1_boutique}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact 2</label>
            <input type="text" class="form-control" id="recipient-name" name="contact_boutique2" value="{{$boutique->contact_2_boutique}}">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" cols="30" name="description_boutique" id="message-text"> {{$boutique->description_boutique}}</textarea>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Photos</label>
            <input type="file" class="form-control" id="recipient-name" name="file">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Mettre a jour</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

    </form>

  </div>
</div>