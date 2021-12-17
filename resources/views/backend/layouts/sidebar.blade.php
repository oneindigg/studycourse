  <?php

    use App\Models\CompanyInfo;

    $info = CompanyInfo::where('id', '1')->first();
    ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">{{ $info->name }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Courses
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/create-courses" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Create Courses</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="/admin/courses" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Courses Table</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item menu">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-image"></i>
                          <p>
                              Sliders
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/create-slider" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Add Sliders</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="/admin/slider" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Sliders Table</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item menu">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              News
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/create-news" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Add News</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="/admin/news" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>News Table</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item menu">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Staffs
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/add-staff" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Add Staff</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="/admin/staffs" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Staff Table</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item menu">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Facilities
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/add-facility" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Add Facilities</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="/admin/facilities" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Facilities Table</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="/admin/testimonials" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Testimonials
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>



                  <li class="nav-item menu">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Sponsors
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/create-sponsor" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Add Sponsor</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="/admin/sponsors" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Sponsors Table</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="/admin/companyinfo" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Company Info
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="/admin/pageinformation" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Page Information
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

  <!-- Content wrapper -->
  <div class="content-wrapper">