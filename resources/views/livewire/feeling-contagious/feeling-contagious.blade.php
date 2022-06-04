
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:feeling-contagious.feeling-contagiou-create  :key="'feelings-create-feeling-'" ></livewire:feeling-contagious.feeling-contagiou-create>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">العنوان </th>
                        <th scope="col">النص </th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allfelling as $model)
                      <tr>

                        <td>{{ $model->tittle }}</td>
                        <td>{{ $model->text }}</td>


                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:feeling-contagious.feeling-contagiou-edit :felling_id="$model->id" :key="'feelings-edit-feeling-'.$model->id" ></livewire:feeling-contagious.feeling-contagiou-edit>
                             <livewire:feeling-contagious.feeling-contagiou-delete :felling_id="$model->id" :key="'feelings-delete-feeling-'.$model->id" ></livewire:feeling-contagious.feeling-contagiou-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allfelling->links() !!}
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



