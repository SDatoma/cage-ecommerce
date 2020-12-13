<div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Faire la promotion de ce produit</strong></h5></br></br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST"  action="{{route('promotion.produit')}}">
       {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pourcentage (%)</label>
            <input type="number" class="form-control" min="1" id="recipient-name" name="pourcentage_promotion" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date debut promotion</label>
            <input type="date" class="form-control" id="recipient-name" name="date_debut_promotion" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date fin promotion</label>
            <input type="date" class="form-control" id="recipient-name" name="date_fin_promotion" required="">
          </div>
          <input type="hidden" class="form-control" id="recipient-name" name="id_produit" value="{{$produit->id_produit}}" required="">
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Enregistrer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

    </form>

  </div>
</div>