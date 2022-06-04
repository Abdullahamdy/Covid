<div class=""style="display:inline">

    <!-- Button trigger modal -->

@can('تعديل قسم')
   <button type="button" class="btn btn-secondary d-inline" data-bs-toggle="modal" data-target="#modal-secondary" data-bs-target=".editfloor{{$floor['id']}}">
    Edit
  </button>
@endcan
   <div  class="modal fade editfloor{{$floor['id']}}" id="modal-secondary">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h4 class="modal-title">تعديل بيانات الدكتور</h4>
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
                                        <label for="exampleInputName">رقم الطابق</label>
                                        <input type="text" class="form-control" id="exampleInputName" wire:model.defer="floor.floor_number" placeholder="Enter name">
                                        @error('floor.floor_number') <span class="text-danger error">{{ $message }}</span>@enderror
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">عدد الغرف</label>
                                    <input type="text" class="form-control" id="exampleInputName" wire:model.defer="floor.number_of_rooms" placeholder="Enter name">
                                    @error('floor.number_of_rooms') <span class="text-danger error">{{ $message }}</span>@enderror
                                  </div>

                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light"> حفظ التعديلات</button>
                  </div>
                </form>


        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>




     </div>
