

<div wire:ignore class=""style="display:inline">

    @can('addproduct')
    <button type="button" class="btn btn-info d-inline" data-bs-toggle="modal" data-target="#modal-info" data-bs-target=".create_patien{{$fa}}">
     Create
   </button>
@endcan

    <div  class="modal fade create_patien{{$fa}}" id="modal-info">
     <div class="modal-dialog">
       <div class="modal-content bg-info">
         <div class="modal-header">
           <h4 class="modal-title">Create Patient Booking</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

             <div wire:ignore.self class="modal-body bg-info">

                 <form wire:submit.prevent="store">

                     <div class="card-body">
                        <div class="form-group">
                            <label for="exampleSelectBorder">Select Patient</label>
                            <select wire:model.defer="pat_booking.patient_id" class="custom-select form-control-border" id="exampleSelectBorder">
                              <option>please select...</option>
                            @foreach ($patients as $model)
                              <option value="{{$model->id}}">{{$model->name}}</option>
                            @endforeach
                            </select>
                          </div>


                          <div class="form-group">
                            <label for="exampleSelectBorder">Select Room</label>
                            <select wire:model.defer="pat_booking.room_id" class="custom-select form-control-border" id="exampleSelectBorder">
                              <option>please select...</option>
                            @foreach ($rooms as $model)
                              <option value="{{$model->id}}">{{$model->room_number}}</option>
                            @endforeach
                            </select>
                          </div>

                          
                          <div class="form-group">
                            <label for="exampleSelectBorder">Select Doctor</label>
                            <select wire:model.defer="pat_booking.doctor_id" class="custom-select form-control-border" id="exampleSelectBorder">
                              <option>please select...</option>
                            @foreach ($doctors as $model)
                              <option value="{{$model->id}}">{{$model->doctor_name}}</option>
                            @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleSelectBorder">Select Nurse</label>
                            <select wire:model.defer="pat_booking.nurse_id" class="custom-select form-control-border" id="exampleSelectBorder">
                              <option>please select...</option>
                            @foreach ($nurses as $model)
                              <option value="{{$model->id}}">{{$model->nurse_name}}</option>
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







