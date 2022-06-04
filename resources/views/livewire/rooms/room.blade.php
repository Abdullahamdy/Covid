
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">

                    <div>
                     <livewire:rooms.rooms-create  :key="'room-create-room-'" ></livewire:rooms.rooms-create>
                    </div>

                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">رقم الغرفة</th>
                        <th scope="col">تابع  طابق</th>


                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allrooms as $model)
                      <tr>

                        <td>{{ $model->room_number }}</td>
                        <td>{{ $model->floor->floor_number }}</td>


                        <td>

                            <livewire:rooms.room-edit :room_id="$model->id" :key="'roooms-edit-roooms-'.$model->id" ></livewire:rooms.room-edit>
                            <livewire:rooms.rooms-delete :room_id="$model->id" :key="'roooms-delete-roooms-'.$model->id" ></livewire:rooms.rooms-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allrooms->links() !!}
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


