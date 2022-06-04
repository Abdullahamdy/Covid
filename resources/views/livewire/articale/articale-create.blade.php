<div >
    @can('اضافة قسم')
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
        اضافه المقال
      </button>
@endcan
      <div wire:ignore.self class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">أضافه المقال</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">بيانات المقال</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form wire:submit.prevent="store" class="modal-body">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputName">عنوان المقال</label>
                          <input type="text" class="form-control" id="exampleInputName" wire:model.defer="articale.tittle" placeholder="Enter name">
                          @error('articale.tittle') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">نص المقال</label>
                            <input type="text" class="form-control" id="exampleInputName" wire:model.defer="articale.text" placeholder="Enter name">
                            @error('articale.text') <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>


                          <div  class="form-group">
                            <label for="exampleInputFile">المقال صوره</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" wire:model.defer="photo" class="custom-file-input" id="exampleInputFile"multiple>
                                <label class="custom-file-label" for="exampleInputFile"> اختار الملف</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">تحميل</span>
                              </div>
                            </div>
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











