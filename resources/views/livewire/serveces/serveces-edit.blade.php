<div class=""style="display:inline">

    <!-- Button trigger modal -->

@can('تعديل قسم')
   <button type="button" class="btn btn-secondary d-inline" data-bs-toggle="modal" data-target="#modal-secondary" data-bs-target=".editServece{{$servece['id']}}">
    Edit
  </button>
@endcan
   <div  class="modal fade editServece{{$servece['id']}}" id="modal-secondary">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h4 class="modal-title">تعديل بيانات الخدمه</h4>
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
                                        <label for="exampleFormControlInput1">عنوان الخدمه</label>
                                        <input type="text" class="form-control" wire:model.defer="servece.tittle" id="exampleFormControlInput1" placeholder="Enter Name">
                                        @error('servece.tittle') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">نص الخدمه</label>
                                    <input type="text" class="form-control" wire:model.defer="servece.text" id="exampleFormControlInput1" placeholder="Enter Name">
                                    @error('servece.text') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                               
                            </div>

                            </div>
                        </div>
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
