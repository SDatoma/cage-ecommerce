<!-- Central Modal Small -->
<div class="modal fade" id="sp{{$promotion->id_promotion}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form class="form-horizontal" method="POST" action="{{route('delete.promotion',$promotion->id_promotion)}}">
  @method('DELETE')
     @csrf
   <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <!--Body-->
          <div class="modal-body">
           <strong><p>Supprimer cette Promotion ? </strong></p>
          </div>
          <!--Footer-->
               <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Oui</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Non</button>
                </div>
        </div>
      </form>
      </div>
    </div>
  