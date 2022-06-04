
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <livewire:articale.articale-create  :key="'articales-create-articale-'" ></livewire:articale.articale-create>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">عنوان المقال</th>
                        <th scope="col">النص</th>
                        <th scope="col">الصورة</th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($allArticales as $model)
                      <tr>

                        <td>{{ $model->tittle }}</td>
                        <td>{{ $model->text }}</td>
                        <td>

                                @if($path = $model->image[0]->filename ?? null)
                                 <img src="{{asset('Attachments/Articales/'. $path)}}" alt="Girl in a jacket" width="50" height="50">
                                 @endif
                             </td>


                        <td>
                            {{-- <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user> --}}
                            <livewire:articale.articale-edit :articale_id="$model->id" :key="'articales-edit-articale-'.$model->id" ></livewire:articale.articale-edit>
                             <livewire:articale.articale-delete :articale_id="$model->id" :key="'articales-delete-articale-'.$model->id" ></livewire:articale.articale-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $allArticales->links() !!}
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



