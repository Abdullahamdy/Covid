<div class=""style="display:inline">

    <!-- Button trigger modal -->

@can('تعديل قسم')
   <button type="button" class="btn btn-secondary d-inline" data-bs-toggle="modal" data-target="#modal-secondary" data-bs-target=".editarticale{{$articale['id']}}">
    تعديل
  </button>
@endcan
   <div wire:ignore.self  class="modal fade editarticale{{$articale['id']}}" id="modal-secondary">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h4 class="modal-title">تعديل بيانات المقال</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

            <div wire:ignore.self class="modal-body bg-secondary">
                <form wire:submit.prevent="update">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mg-b-20">
                            <div class="card-body bg-secondary">
                                <div class="main-content-label mg-b-5">

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">عنوان المقال</label>
                                        <input type="text" class="form-control" wire:model.defer="articale.tittle" id="exampleFormControlInput1" placeholder="Enter Name">
                                        @error('articale.tittle') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">نص المقال</label>
                                    <input type="text" class="form-control" wire:model.defer='articale.text'id="exampleFormControlInput1" placeholder="Enter Name">
                                    @error('articale.text') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div  class="form-group">
                                    <label for="exampleInputFile">صوره المقال</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" wire:model.defer="photo" class="custom-file-input" id="exampleInputFile"multiple>
                                        <label class="custom-file-label" for="exampleInputFile">update image</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text">اختار الملف</span>
                                      </div>
                                    </div>
                                  </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">حفظ </button>
                  </div>
                </form>


        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>




     </div>
