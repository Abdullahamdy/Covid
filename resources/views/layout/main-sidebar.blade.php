<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset("dashboard/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">C PANAL</span>
    </a>

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset("dashboard/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user('web') ? auth()->user('web')->name : ''}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


             @can('المستخدمين')
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tree"></i>
                 <p>
                   المستخدمين
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 @can('صلاحيات المستخدمين')
                 <li class="nav-item">
                   <a href="{{url('admin/Roles')}}" class="nav-link">
                     <p>صلاحيات المستخدمين</p>
                   </a>
                 </li>
                 @endcan
                <div></div>
                @can('قائمة المستخدمين')
                 <li class="nav-item">
                   <a href="{{url('admin/users')}}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>قائمة المستخدمين</p>
                   </a>
                 </li>
                 @endcan

                 </li>

                 @endcan
               </ul>
             </li>




             @can('الاقسام')

             <li class="nav-item">
                 <a href="{{url('admin/categories')}}" class="nav-link">

                   <p>
                     الأقسام
                     {{-- <span class="badge badge-info right">2</span> --}}
                   </p>
                 </a>
               </li>
               @endcan


               <li class="nav-item menu-open">
                <a href="{{url('admin/doctor')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    الأطباء
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{url('admin/nurses')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    الممرضين
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>>

              <li class="nav-item">
                <a href="{{url('admin/floors')}}"class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    الطوابق
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a  href="{{url('admin/patient')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">المصابين</p>
                </a>
              </li>

              <li class="nav-item">
                <a  href="{{url('admin/articale')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">المقالات</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{url('admin/patient-booking')}}" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">حجز الغرف</p>
                  </a>
              </li>
              <li class="nav-item">
                <a  href="{{url('admin/contact-us')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">تواصل معنا</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{url('admin/serveces')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">الخدمات التي نقدمها</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{url('admin/feeling-contagiouses')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">في حاله الشعور  بالعدوي</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{url('admin/infected-peoples')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">الاشخاص المصابين</p>
                </a>
              </li>

              <li class="nav-item">
                <a  href="{{url('admin/rooms')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">الغرف </p>
                </a>
              </li>


             </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
