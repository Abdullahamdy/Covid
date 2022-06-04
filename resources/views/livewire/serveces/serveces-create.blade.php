<div >
    @can('اضافة قسم')
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
        اضافه خدمه
      </button>
@endcan
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">أضافه خدمه</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">بيانات الخدمه</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form wire:submit.prevent="store" class="modal-body">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputName">أسم الخدمه</label>
                          <input type="text" class="form-control" id="exampleInputName" wire:model.defer="servece.tittle" placeholder="Enter name">
                          @error('servece.tittle') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">نص الخدمه</label>
                            <input type="text" class="form-control" id="exampleInputName" wire:model.defer="servece.text" placeholder="Enter name">
                            @error('servece.text') <span class="text-danger error">{{ $message }}</span>@enderror
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











