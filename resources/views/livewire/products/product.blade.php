
<div>
    
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                   
                    <div>
                     <livewire:products.create-product  :key="'category-create-product-'" ></livewire:products.create-product> 
                    </div>
                     
                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">category</th>
                        <th scope="col">qutity</th>
                        <th scope="col">photo</th>
                        <th scope="col">description</th>
                        <th scope="col">progress</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $model)
                      <tr>

                        <td>{{ $model->name }}</td>
                        <td>{{ $model->price }}</td>
                        <td>{{ $model->categories->name }}</td>
                        <td>{{ $model->quantity }}</td>

                        <td>
                           @if($path = $model->image[0]->filename ?? null)
                            <img src="{{asset('Attachments/products/'. $path)}}" alt="Girl in a jacket" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $model->description  }}</td>

                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:products.edit-product :prod_id="$model->id" :key="'product-edit-products-'.$model->id" ></livewire:products.edit-product>
                            <livewire:products.delete-product :prod_id="$model->id" :key="'product-delete-products-'.$model->id" ></livewire:products.delete-product>
                             {{-- <livewire:categories.delete-category :cat_id="$model->id" :key="'categories-delete-categories-'.$model->id" ></livewire:categories.delete-category>   --}}

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $products->links() !!}
                  </ul>
                </div>
              </div>
              <!-- /.card -->


              <!-- /.card -->
            </div>

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <div>


