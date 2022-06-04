<div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <livewire:roles.create-role  :key="'roles-create-roles-'" ></livewire:roles.create-role>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>

                    <th>Role</th>
                    <th>Progress</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                  <tr>

                    <td>

                        {{ $role->name }}

                    </td>
                    <td>
                        <livewire:roles.show-role  :role_id="$role->id" :key="'roles-show-role-'.$role->id"></livewire:roles.show-role>

                        <livewire:roles.edit-role  :role_id="$role->id" :key="'roles-edit-role-'.$role->id"></livewire:roles.edit-role>

                        <livewire:roles.delete-role  :role_id="$role->id" :key="'roles-delete-role-'.$role->id"></livewire:roles.delete-role>


                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{-- <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                {!! $roles->links() !!}
              </ul>
            </div> --}}
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<div>
