
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:infected-peoples.infected-people-create  :key="'infected-create-infected-'" ></livewire:infected-peoples.infected-people-create>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">عنوان النص</th>
                        <th scope="col">نص </th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allinfected as $model)
                      <tr>

                        <td>{{ $model->tittle }}</td>
                        <td>{{ $model->text }}</td>
                        

                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:infected-peoples.infected-people-edit :infected_id="$model->id" :key="'infected-edit-infected-'.$model->id" ></livewire:infected-peoples.infected-people-edit>
                             <livewire:infected-peoples.infected-people-delete :infected_id="$model->id" :key="'infected-delete-infected-'.$model->id" ></livewire:infected-peoples.infected-people-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allinfected->links() !!}
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



