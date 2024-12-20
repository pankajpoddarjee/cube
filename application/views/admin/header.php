<div class="app-header d-flex align-items-center">

  <!-- Toggle buttons start -->
  <div class="d-flex">
    <button class="btn btn-outline-light toggle-sidebar" id="toggle-sidebar">
      <i class="icon-menu"></i>
    </button>
    <button class="btn btn-outline-light pin-sidebar" id="pin-sidebar">
      <i class="icon-menu"></i>
    </button>
  </div>
  <!-- Toggle buttons end -->

  <!-- App brand sm start -->
  <div class="app-brand-sm d-md-none d-sm-block">
    <a href="index.html">
      <img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
    </a>
  </div>
  <!-- App brand sm end -->

  <!-- Search container start -->
  <div class="search-container d-lg-block d-none mx-3">
    <input type="text" class="form-control" placeholder="Search" />
    <i class="icon-search"></i>
  </div>
  <!-- Search container end -->

  <!-- App header actions start -->
  <div class="header-actions">
    <div class="dropdown">
      <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo base_url('assets/images/flags/1x1/gb.svg') ?>" class="flag-img" alt="Bootstrap Dashboards" />
      </a>
      <div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini">
        <div class="country-container">
          <a href="index.html" class="py-2">
            <img src="<?php echo base_url('assets/images/flags/1x1/us.svg') ?>" alt="Admin Panel" />
          </a>
          <a href="index.html" class="py-2">
            <img src="<?php echo base_url('assets/images/flags/1x1/in.svg') ?>" alt="Admin Panels" />
          </a>
          <a href="index.html" class="py-2">
            <img src="<?php echo base_url('assets/images/flags/1x1/br.svg') ?>" alt="Admin Dashboards" />
          </a>
          <a href="index.html" class="py-2">
            <img src="<?php echo base_url('assets/images/flags/1x1/tr.svg') ?>" alt="Admin Themes" />
          </a>
          <a href="index.html" class="py-2">
            <img src="<?php echo base_url('assets/images/flags/1x1/id.svg') ?>" alt="Google Admin" />
          </a>
        </div>
      </div>
    </div>
    <div class="dropdown d-sm-flex d-none">
      <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="icon-shopping-cart fs-4 lh-1"></i>
        <span class="count rounded-circle bg-danger">9</span>
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
        <h5 class="fw-semibold px-3 py-2 m-0">Orders</h5>
        <a href="javascript:void(0)" class="dropdown-item">
          <div class="d-flex align-items-start py-2">
            <div class="p-3 bg-danger border border-danger rounded-circle me-3">
              MS
            </div>
            <div class="m-0">
              <h6 class="mb-1 fw-semibold">Moory Sammy</h6>
              <p class="mb-1">Ordered an iPhone.</p>
              <p class="small m-0 opacity-50">3 Mins Ago</p>
            </div>
          </div>
        </a>
        <a href="javascript:void(0)" class="dropdown-item">
          <div class="d-flex align-items-start py-2">
            <div class="p-3 bg-primary border border-primary rounded-circle me-3">
              KY
            </div>
            <div class="m-0">
              <h6 class="mb-1 fw-semibold">Kyle Yomaha</h6>
              <p class="mb-1">Purchased a MacBook.</p>
              <p class="small m-0 opacity-50">5 Mins Ago</p>
            </div>
          </div>
        </a>
        <a href="javascript:void(0)" class="dropdown-item">
          <div class="d-flex align-items-start py-2">
            <div class="p-3 bg-success border border-success rounded-circle me-3">
              SB
            </div>
            <div class="m-0">
              <h6 class="mb-1 fw-semibold">Srinu Basava</h6>
              <p class="mb-1">Purchased a NotePad.</p>
              <p class="small m-0 opacity-50">7 Mins Ago</p>
            </div>
          </div>
        </a>
        <div class="d-grid p-3 border-top">
          <a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
        </div>
      </div>
    </div>
    <div class="dropdown d-sm-flex d-none">
      <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="icon-twitch fs-4 lh-1"></i>
        <span class="count rounded-circle bg-danger">5</span>
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
        <h5 class="fw-semibold px-3 py-2 m-0">Notifications</h5>
        <a href="javascript:void(0)" class="dropdown-item">
          <div class="d-flex align-items-start py-2">
            <img src="<?php echo base_url('assets/images/user.png') ?>" class="img-3x me-3 rounded-3" alt="Admin Themes" />
            <div class="m-0">
              <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
              <p class="mb-1">Membership has been ended.</p>
              <p class="small m-0 opacity-50">Today, 07:30pm</p>
            </div>
          </div>
        </a>
        <a href="javascript:void(0)" class="dropdown-item">
          <div class="d-flex align-items-start py-2">
            <img src="<?php echo base_url('assets/images/user2.png') ?>" class="img-3x me-3 rounded-3" alt="Admin Theme" />
            <div class="m-0">
              <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
              <p class="mb-1">Congratulate, James for new job.</p>
              <p class="small m-0 opacity-50">Today, 08:00pm</p>
            </div>
          </div>
        </a>
        <a href="javascript:void(0)" class="dropdown-item">
          <div class="d-flex align-items-start py-2">
            <img src="<?php echo base_url('assets/images/user1.png') ?>" class="img-3x me-3 rounded-3" alt="Admin Theme" />
            <div class="m-0">
              <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
              <p class="mb-1">Lewis added new schedule release.</p>
              <p class="small m-0 opacity-50">Today, 09:30pm</p>
            </div>
          </div>
        </a>
        <div class="d-grid p-3 border-top">
          <a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
        </div>
      </div>
    </div>
    <div class="dropdown ms-2">
      <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <span>Fuzail Malik</span>
        <img src="<?php echo base_url('assets/images/user3.png') ?>" class="img-3x m-2 me-0 rounded-3" alt="Admin Templates" />
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
        <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url('admin/account'); ?>"><i
            class="icon-gitlab fs-4 me-3"></i>User Profile</a>
        <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url('admin/settings'); ?>"><i
            class="icon-settings fs-4 me-3"></i>Settings</a>
        <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url('admin/changePassword'); ?>"><i
            class="icon-key fs-4 me-3"></i>Change Password</a>
        <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url('admin/logout'); ?>"><i
            class="icon-log-out fs-4 me-3"></i>Logout</a>
      </div>
    </div>
  </div>
  <!-- App header actions end -->

</div>