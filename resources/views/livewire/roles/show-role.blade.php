


    <div  class="d-inline p-2"style="display:inline">

        <!-- Button trigger modal -->
        @can('عرض صلاحية')
    
     <button  type="button" style="display: inline" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
         عرض
       </button>
       @endcan

       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <div class="row">

                    <div class="col-lg-4">
                        <ul id="treeview1">
                            <li><a href="#">{{ $role->name }}</a>
                                <ul>

                                    @if(!empty($rolePermissions))

                                    @foreach($rolePermissions as $v)
                                    <li>{{ $v->name }}</li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
             </div>
           </div>
         </div>
       </div>
    </div>




