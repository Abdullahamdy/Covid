
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:nurses.nurse-create  :key="'nurses-create-nurse-'" ></livewire:nurses.nurse-create>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">اسم الممرض</th>
                        <th scope="col">السن</th>
                        <th scope="col">العمليات</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allNurses as $model)
                      <tr>

                        <td>{{ $model->nurse_name }}</td>
                        <td>{{ $model->nurse_age }}</td>


                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:nurses.nurse-edit :nurse_id="$model->id" :key="'nurses-edit-nurses-'.$model->id" ></livewire:nurses.nurse-edit>
                             <livewire:nurses.nurse-delete :nurse_id="$model->id" :key="'nurses-delete-nurses-'.$model->id" ></livewire:nurses.nurse-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allNurses->links() !!}
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




