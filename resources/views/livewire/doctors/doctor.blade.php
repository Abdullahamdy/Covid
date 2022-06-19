
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:doctors.create-doctor  :key="'doctors-create-doctor-'" ></livewire:doctors.create-doctor>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">اسم الدكتور</th>
                        <th scope="col">السن</th>
                        <th scope="col">التخصص</th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allDoctors as $model)
                      <tr>

                        <td>{{ $model->doctor_name }}</td>
                        <td>{{ $model->doctor_age }}</td>
                        <td>{{ $model->specialit->specialties }}</td>

                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:doctors.edit-doctor :doctor_id="$model->id" :key="'doctors-edit-doctor-'.$model->id" ></livewire:doctors.edit-doctor>
                             <livewire:doctors.delete-doctor :doctor_id="$model->id" :key="'doctors-delete-doctor-'.$model->id" ></livewire:doctors.delete-doctor>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allDoctors->links() !!}
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



