
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

                        <th scope="col">name Patient</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Blood Type</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Control</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($AllPatient as $model)
                      <tr>

                        <td>{{ $model->name }}</td>
                        <td>{{ $model->age }}</td>
                        <td>{{ $model->address }}</td>
                        <td>{{ $model->blood_type }}</td>
                        <td>{{ $model->phone }}</td>

                      
                       

                        <td>
                            <livewire:patients.delete-patient :patient_id="$model->id" :key="'patients-delete-patients-'.$model->id" ></livewire:patients.delete-patient>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $AllPatient->links() !!}
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


