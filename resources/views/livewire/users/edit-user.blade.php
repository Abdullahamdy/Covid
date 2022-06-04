<div class=""style="display:inline">

    <!-- Button trigger modal -->
@can('تعديل مستخدم')
   <button type="button" class="btn btn-secondary d-inline" data-bs-toggle="modal" data-target="#modal-secondary" data-bs-target=".edituser{{$user['id']}}">
    Edit User
  </button>
  @endcan


   <div  class="modal fade edituser{{$user['id']}}" id="modal-secondary">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h4 class="modal-title">Secondary Modal</h4>
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
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input type="text" class="form-control" wire:model.defer="user.name" id="exampleFormControlInput1" placeholder="Enter Name">
                                        @error('user.name') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Email address</label>
                                        <input type="text" wire:model.defer="user.email" class="form-control" id="exampleFormControlInput2"  placeholder="Enter Email">
                                        @error('user.email') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>

                                    <select wire:ignore.self class="form-select" aria-label="Default select example" multiple wire:model.defer="user.roles_name">
                                        <option selected>Open this select menu</option>
                                        @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                       
                                       
                                      </select>

                                </div>
                                <div class="row">
                                    <!-- col -->


                                    <div class="col-lg-4">

                                    </div>

                                    <!-- /col -->
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
