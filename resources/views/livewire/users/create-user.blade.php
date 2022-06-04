<div >
    @can('اضافة مستخدم')
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        Add User
      </button>
      @endcan

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input wire:model.defer="user.name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('user.name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>
                        <input type="text" wire:model.defer="user.email" class="form-control" id="exampleFormControlInput2"  placeholder="Enter Email">
                        @error('user.email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="row mg-b-20">

                        <select name="role_id" id="cars" multiple wire:model.defer="user.roles_name">
                           
                            @foreach ($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        {{-- <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label"> صلاحية المستخدم</label>
                                {!! Form::select('user.roles_name[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                            </div>
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput">Password</label>
                        <input wire:model.defer="user.password" type="text" class="form-control" id="exampleFormControlInput" placeholder="Enter password">
                        @error('user.password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                </form>

            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
