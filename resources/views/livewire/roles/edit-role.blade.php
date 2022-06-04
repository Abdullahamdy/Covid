

<div class=""style="display:inline">

            <!-- Button trigger modal -->

@can('تعديل صلاحية')
   <button type="button" class="btn btn-secondary d-inline" data-bs-toggle="modal" data-target="#modal-secondary" data-bs-target=".edit{{$role['id']}}">
            Edit
          </button>
          @endcan


           <div wire:ignore class="modal fade edit{{$role['id']}}" id="modal-secondary">
            <div class="modal-dialog">
              <div class="modal-content bg-secondary">
                <div class="modal-header">
                  <h4 class="modal-title">Secondary Modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                    <div class="modal-body bg-secondary">
                        <form wire:submit.prevent="update">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mg-b-20">
                                    <div class="card-body bg-secondary">
                                        <div class="main-content-label mg-b-5">
                                            <div class="form-group">

                                                <label for="exampleFormControlInput1">Name</label>
                                                <input type="text" class="form-control" wire:model.defer="role.name" id="exampleFormControlInput1" placeholder="Enter Name">
                                                @error('role.name') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="row">




                                            <div wire:ignore class="form-check">
                                                @foreach($permission as $value)
                                                <input  type="checkbox" value="{{ $value->id }}"wire:model.lazy="rolePermissions">
                                                <label>{{$value->name}}</label>                       
                                                <label class="form-check-label" for="flexCheckDefault" class="d-block">
                 
                                                </label>
                                                <br>
                                                @endforeach
                                              </div>


                                            {{-- <div class="col-lg-12">
                                                <ul id="treeview1">
                                                    <label for="exampleFormControlInput1">permession</label>
                                                        <ul>
                                                            <li>
                                                                @foreach($permission as $value)
                                                                <input  type="checkbox" value="{{ $value->id }}"
                                                                      wire:model.lazy="rolePermissions">
                                                                     <label>{{$value->name}}</label>
                                                           @endforeach


                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div> --}}

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


