<div class="d-inline">
    @can('حذف مستخدم')
    <button type="button" class="btn btn-danger" data-bs-toggle="modal"  data-target="#modal-danger"  data-bs-target=".delete{{$user['id']}}">
        Dlete
      </button>
@endcan


      <div  class="modal fade delete{{$user['id']}}" id="modal-secondary">
      
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Danger Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <p>Are You Sure Delete This User&hellip;</p>
              <form wire:submit.prevent="delete">
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

