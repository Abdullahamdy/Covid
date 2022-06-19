
<div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">

                    <div>
                     <livewire:patient-booking.create-patien-booking  :key="'patient-booking-create-patient-booking-'" ></livewire:patient-booking.create-patien-booking>
                    </div>

                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th scope="col">Doctor Name</th>
                        <th scope="col">Nurse Name</th>
                        <th scope="col">Room Number</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Control</th>


                      </tr>
                    </thead>
                    <tbody>
                        @foreach($pat_bookings as $model)
                      <tr>

                        <td>{{ $model->doctor->doctor_name }}</td>
                        <td>{{ $model->nurse->nurse_name }}</td>
                        <td>{{ $model->room_id }}</td>
                        <td>{{ $model->patient->name}}</td>

                        <td>
                            <livewire:patient-booking.edit-patien-booking :pat_booking_id="$model->id" :key="'patient-booking.edit-patien-booking-'.$model->id" ></livewire:patient-booking.edit-patien-booking>
                            <livewire:patient-booking.delete-patien-booking :pat_booking_id="$model->id" :key="'patient-booking.delete-patien-booking-'.$model->id" ></livewire:patient-booking.delete-patien-booking>


                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {!! $pat_bookings->links() !!}
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


