<div class="modal fade" id="r{{$commentaire->id_commentaire}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title"><strong>Faire la promotion de ce produit</strong></h5></br></br> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST"  action="{{route('commentaire.store')}}">
       {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text" class="form-control" name="nom" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="email" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Message</label>
            <textarea name="resume" class="form-control" placeholder="Message" required=""></textarea>
          </div>
          <input type="hidden" class="form-control" id="recipient-name" name="id_produit" value="{{$produit->id_produit}}" required="">
          <input type="hidden" class="form-control"  name="parent" value="{{$commentaire->id_commentaire}}" required="">
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Enregistrer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

    </form>

  </div>
</div>