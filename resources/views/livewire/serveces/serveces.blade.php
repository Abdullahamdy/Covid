
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:serveces.serveces-create  :key="'serveces-create-serveces-'" ></livewire:serveces.serveces-create>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">عنوان الخدمه</th>
                        <th scope="col">نص الخدمة</th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allserveces as $model)
                      <tr>

                        <td>{{ $model->tittle }}</td>
                        <td>{{ $model->text }}</td>
                        

                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:serveces.serveces-edit :servece_id="$model->id" :key="'serveces-edit-servece-'.$model->id" ></livewire:serveces.serveces-edit>
                             <livewire:serveces.serveces-delete :servece_id="$model->id" :key="'serveces-delete-servece-'.$model->id" ></livewire:serveces.serveces-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allserveces->links() !!}
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



