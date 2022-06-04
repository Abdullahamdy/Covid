<div wire:ignore class=""style="display:inline">
    @can('تعديل منتج')

       <button type="button" class="btn btn-secondary d-inline" data-bs-toggle="modal" data-target="#modal-secondary" data-bs-target=".editroom{{$room['id']}}">
        <i class="nav-icon fas fa-edit"></i>

      </button>
      @endcan
       <div  class="modal fade editroom{{$room['id']}}" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Room</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                <div wire:ignore.self class="modal-body bg-secondary">

                    <form wire:submit.prevent="update">

                        <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputName">Room_number</label>
                              <input wire:model.defer="room.room_number"  type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputprice">price</label>
                                <input wire:model.defer="room.floor_id" type="text" class="form-control" id="exampleInputprice" placeholder="Enter price">
                              </div>


                            <div class="form-group">
                              <label for="exampleSelectBorder">Select floor</label>
                              <select wire:model.defer="room.floor_id" class="custom-select form-control-border" id="exampleSelectBorder">
                                <option>please select...</option>
                              @foreach ($floors as $model)
                                <option value="{{$model->id}}">{{$model->name}}</option>
                              @endforeach
                              </select>
                            </div>




                            <div class="d-flex justify-content-center">
                          
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

