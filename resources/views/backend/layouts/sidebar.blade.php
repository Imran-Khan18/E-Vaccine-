<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{route('dashboard')}}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="{{route('dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin-doctors')}}" class="nav-link @if($view === "add_doctors") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add doctors</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('doctors-view')}}" class="nav-link @if($view === "doctors") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Doctors</p>
                        </a>
                    </li>
					<li class="nav-item">
                        <a href="{{route('admin-departments')}}" class="nav-link @if($view === "add_departments") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add departments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('departments-view')}}" class="nav-link @if($view === "departments") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Departments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin-ambulances')}}" class="nav-link @if($view === "add_ambulances") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add ambulances</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('ambulances-view')}}" class="nav-link @if($view === "admin_ambulances") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>ambulances</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('registrations')}}" class="nav-link @if($view === "registrations") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrations</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('appointments')}}" class="nav-link @if($view === "appointments") active @endif "  >
                            <i class="far fa-circle nav-icon"></i>
                            <p>Appointments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contacts')}}" class="nav-link @if($view === "contacts") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contacts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('ambulance-requests')}}" class="nav-link @if($view === "ambulance-requests") active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ambulance requests</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!--<li class="nav-item">
                <a href="pages/kanban.html" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Kanban Board
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                </a>
            </li>-->
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
