<!-- Central Modal Small -->
<div class="modal fade" id="ss{{$slider->id_slider}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form class="form-horizontal" method="POST" action="{{route('slider.destroy',$slider->id_slider)}}">
  @method('DELETE')
     @csrf
   <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          
          <!--Body-->
          <div class="modal-body">
           <strong><p>Supprimer cette Image ? </strong></p>
           <img src="/{{$slider->image_slider}}" width="48" alt="Categorie img">
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
  