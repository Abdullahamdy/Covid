<div >
    @can('اضافة قسم')
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
        اضافه طابق
      </button>
@endcan
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">أضافه طابق</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">بيانات الطابق</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form wire:submit.prevent="store" class="modal-body">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputName">رقم الطابق</label>
                          <input type="text" class="form-control" id="exampleInputName" wire:model.defer="floor.floor_number" placeholder="Enter name">
                          @error('floor.floor_number') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">عدد الغرف</label>
                            <input type="text" class="form-control" id="exampleInputName" wire:model.defer="floor.number_of_rooms" placeholder="Enter name">
                            @error('floor.number_of_rooms') <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>



                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">حفظ</button>
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











