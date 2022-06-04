

<div wire:ignore class=""style="display:inline">

    @can('addproduct')
    <button type="button" class="btn btn-info d-inline" data-bs-toggle="modal" data-target="#modal-info" data-bs-target=".addroom">
     Create
   </button>
@endcan

    <div  class="modal fade addroom" id="modal-info">
     <div class="modal-dialog">
       <div class="modal-content bg-info">
         <div class="modal-header">
           <h4 class="modal-title">Create Product</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

             <div wire:ignore.self class="modal-body bg-info">

                 <form wire:submit.prevent="store">




                           <div class="form-group">
                             <label for="exampleInputquntity">Room Number</label>
                             <input wire:model.defer="room.room_number"  type="text" class="form-control" id="exampleInputquntity" placeholder="Enter quntity">
                           </div>
                         <div class="form-group">
                           <label for="exampleSelectBorder">Select floor</label>
                           <select wire:model.defer="room.floor_id" class="custom-select form-control-border" id="exampleSelectBorder">
                             <option>please select...</option>
                           @foreach ($floors as $model)
                             <option value="{{$model->id}}">{{$model->floor_number}}</option>
                           @endforeach
                           </select>
                         </div>


                       </div>
                      <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-outline-light">Save changes</button>
                   </div>
                 </form>


         </div>

       </div>
       <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
   </div>




      </div>







