
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">اسم المستخدم</th>
                        <th scope="col">ايميل المستخدم</th>
                        <th scope="col">السن</th>
                        <th scope="col">الرسالة</th>
                        <th scope="col">العمليات</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $model)
                      <tr>

                        <td>{{ $model->username }}</td>
                        <td>{{ $model->email }}</td>
                        <td>{{ $model->age }}</td>
                        <td>{{ $model->message }}</td>

                        <td>
                             <livewire:contact-us.contact-us-delete :contactus_id="$model->id" :key="'contactus-delete-contact-'.$model->id" ></livewire:contact-us.contact-us-delete>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $contact->links() !!}
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



