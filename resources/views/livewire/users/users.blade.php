
<div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <livewire:users.create-user  :key="'user-create-user-'" ></livewire:users.create-user>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>

                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">progress</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr>

                    <td>{{ $user->name }}</td>
                   <td>{{$user->email}}</td>
                    <td>
                        <livewire:users.show-user  :user_id="$user->id" :key="'user-show-users-'.$user->id"></livewire:users.show-user>
                        <livewire:users.edit-user :user_id="$user->id" :key="'user-edit-users-'.$user->id" ></livewire:users.edit-user>
                        <livewire:users.delete-user :user_id="$user->id" :key="'user-delete-users-'.$user->id" ></livewire:users.delete-user>

                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                {!! $users->links() !!}
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


