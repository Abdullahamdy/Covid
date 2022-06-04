
<div>
    
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:categories.create-category  :key="'category-create-categories-'" ></livewire:categories.create-category>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">name</th>
                        <th scope="col">progress</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $model)
                      <tr>

                        <td>{{ $model->name }}</td>

                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:categories.edit-category :cat_id="$model->id" :key="'categories-edit-categories-'.$model->id" ></livewire:categories.edit-category>
                             <livewire:categories.delete-category :cat_id="$model->id" :key="'categories-delete-categories-'.$model->id" ></livewire:categories.delete-category>  

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $categories->links() !!}
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


