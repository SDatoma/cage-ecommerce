<div class="modal fade" id="mp{{$promotion->id_promotion}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Modifier cette promotion</strong></h5></br></br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST"  action="{{route('update.promotion',$promotion->id_promotion)}}">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pourcentage (%)</label>
            <input type="number" class="form-control" min="1" id="recipient-name" name="pourcentage_promotion" value="{{$promotion->pourcentage_promotion}}" required="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date debut promotion</label>
            <input type="date" class="form-control" id="recipient-name" name="date_debut_promotion" value="{{$promotion->date_debut_promotion}}" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date fin promotion</label>
            <input type="date" class="form-control" id="recipient-name" name="date_fin_promotion" value="{{$promotion->date_fin_promotion}}" >
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