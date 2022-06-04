

<div class="d-inline">
@can('اضافة صلاحية')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
        New Role
      </button>
@endcan
    <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input wire:model.defer="roles.name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('roles.name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>




                    <div wire:ignore class="form-check">
                        @foreach($permission as $value)
                        <input class="form-check-input" wire.model.defer="roles.permission[]" wire:model.defer="permession" type="checkbox" value="{{$value->id}}" id="flexCheckDefault">

                        <label class="form-check-label" for="flexCheckDefault" class="d-block">

                          {{$value->name}}
                        </label>
                        <br>
                        @endforeach
                      </div>

                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-light">Save changes</button>
                      </div>
                </form>
            </div>

          </div>

        </div>

      </div>


</div>





