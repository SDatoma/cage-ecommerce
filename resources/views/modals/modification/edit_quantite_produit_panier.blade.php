<div class="modal fade" id="eqpp{{$item->__raw_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>
        <a  href="#"><img class="img-responsive" src="/{{$item->produit->image_produit}}" width="100px" height="200px" alt="" /></a>
        </h5></br></br>
        <strong style="color:black;font-size:20px">{{$item->name}}</strong>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <form  method="POST" action="{{route('cart.update',$item->__raw_id)}}">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><strong style="color:black;">Quantite</strong></label>
            <input type="number" class="form-control" name="quantite" min="1" value="{{$item->qty}}" required="">
          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Modifier</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

    </form>

  </div>
</div>
