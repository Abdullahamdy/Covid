<div class="d-inline">
    @can('حذف قسم')
    <button type="button" class="btn btn-danger" data-bs-toggle="modal"  data-target="#modal-danger"  data-bs-target=".delete{{$nurse['id']}}">
        حذف
      </button>
@endcan



      <div  class="modal fade delete{{$nurse['id']}}" id="modal-secondary">

        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title"> حذف الممرض</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <p>&hellip;هل انت متأكد من حذف الممرض  {{ $nurse['nurse_name']}}</p>
              <form wire:submit.prevent="delete">
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-outline-light">حذف</button>
                  </div>
        </form>
            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>




</div>

