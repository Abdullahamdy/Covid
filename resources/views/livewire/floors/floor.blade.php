
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:floors.create-floor  :key="'floors-create-floor-'" ></livewire:floors.create-floor>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>


                        <th scope="col">رقم الطابق</th>
                        <th scope="col">عددالغرف</th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allFloors as $model)
                      <tr>

                        <td>{{ $model->floor_number }}</td>
                        <td>{{ $model->number_of_rooms }}</td>


                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:floors.edit-floor :floor_id="$model->id" :key="'floors-edit-floor-'.$model->id" ></livewire:floors.edit-floor>
                             <livewire:floors.delete-floor :floor_id="$model->id" :key="'floors-delete-floor-'.$model->id" ></livewire:floors.delete-floor>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allFloors->links() !!}
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



