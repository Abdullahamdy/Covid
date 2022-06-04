<div >
    @can('اضافة قسم')
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
        اضافه دكتور
      </button>
@endcan
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">أضافه دكتور</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">بيانات الدكتور</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form wire:submit.prevent="store" class="modal-body">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputName">أسم الدكتور</label>
                          <input type="text" class="form-control" id="exampleInputName" wire:model.defer="doctor.doctor_name" placeholder="Enter name">
                          @error('doctor.doctor_name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">سن الدكتور</label>
                            <input type="text" class="form-control" id="exampleInputName" wire:model.defer="doctor.doctor_age" placeholder="Enter name">
                            @error('doctor.doctor_age') <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>


                          <div class="form-group">
                            <label for="exampleInputName">تخصص الدكتور</label>
                            <select wire:model.defer="doctor.specialization_id" class="custom-select form-control-border" id="exampleSelectBorder">
                              <option>please select...</option>
                            @foreach ($specializations as $model)
                              <option value="{{$model->id}}">{{$model->specialties}}</option>
                            @endforeach
                            </select>
                          </div>

                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>











