

<div wire:ignore class=""style="display:inline">

    @can('addproduct')
    <button type="button" class="btn btn-info d-inline" data-bs-toggle="modal" data-target="#modal-info" data-bs-target=".editproduct{{$fa}}">
     Create
   </button>
@endcan

    <div  class="modal fade editproduct{{$fa}}" id="modal-info">
     <div class="modal-dialog">
       <div class="modal-content bg-info">
         <div class="modal-header">
           <h4 class="modal-title">Create Product</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

             <div wire:ignore.self class="modal-body bg-info">

                 <form wire:submit.prevent="store">

                     <div class="card-body">
                         <div class="form-group">
                           <label for="exampleInputName">Name</label>
                           <input wire:model.defer="product.name"  type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputprice">price</label>
                             <input wire:model.defer="product.price" type="text" class="form-control" id="exampleInputprice" placeholder="Enter price">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputdescription">description</label>
                             <input wire:model.defer="product.description"  type="text" class="form-control" id="exampleInputdescription" placeholder="Enter description">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputquntity">quntity</label>
                             <input wire:model.defer="product.quantity"  type="text" class="form-control" id="exampleInputquntity" placeholder="Enter quntity">
                           </div>
                         <div class="form-group">
                           <label for="exampleSelectBorder">Select Category</label>
                           <select wire:model.defer="product.cat_id" class="custom-select form-control-border" id="exampleSelectBorder">
                             <option>please select...</option>
                           @foreach ($categories as $model)
                             <option value="{{$model->id}}">{{$model->name}}</option>
                           @endforeach
                           </select>
                         </div>

                         <div  class="form-group">
                             <label for="exampleInputFile">File input</label>
                             <div class="input-group">
                               <div class="custom-file">
                                 <input type="file" wire:model="photo" class="custom-file-input" id="exampleInputFile"multiple>
                                 <label class="custom-file-label" for="exampleInputFile">update image</label>
                               </div>
                               <div class="input-group-append">
                                 <span class="input-group-text">Upload</span>
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







