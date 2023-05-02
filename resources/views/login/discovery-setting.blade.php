 @extends('layout.layout')
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
           <a href="#" class="app-brand-link gap-2">
                  <img src="../assets/img/elements/logo-final.png"/>
          </div>

          <div class="menu-inner-shadow"></div>
		  <hr />
		  <div class="row mt-3 pdl-20">
  <div class="col-lg-12">
                  
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-home"
                          aria-controls="navs-pills-top-home"
                          aria-selected="true"
                        >
                          Matches
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-profile"
                          aria-controls="navs-pills-top-profile"
                          aria-selected="false"
                        >
                          Messages
                        </button>
                      </li>
                      
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
							<div class="col-lg-12">
                     
                      <div class="demo-inline-spacing mt-3">
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                          Raman
                            <span class="badge bg-primary">5</span>
                          </li>
                         
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tart tiramisu cake
                            <span class="badge bg-success">2</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Bonbon toffee muffin
                            <span class="badge bg-danger rounded-pill">3</span>
                          </li>
                          <li class="list-group-item">Dragée tootsie roll</li>
                        </ul>
                      </div>
                    </div>
					  </div>
                      <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <p>
                          Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                          cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                          cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                          Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                          cotton candy liquorice caramels.
                        </p>
                      </div>
                      
                    </div>
                  </div>
                </div>
          </div>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="#"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Premium Membership</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Swati Thakur</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Subscription</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>


          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Notifications
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/account-setting')}}"
                        ><i class="bx bx-user me-1"></i> Account</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link active" href="{{url('/discovery-setting')}} "
                        ><i class="bx bx-bell me-1"></i> Discovery Setting</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="subscription-payment-settings.html"
                        ><i class="bx bx-link-alt me-1"></i> Payments & More</a
                      >
                    </li>
                  </ul>
                  <div class="card">
                    <!-- Notifications -->
                    <h5 class="card-header">Account Settings</h5>
                    <div class="card-body">
                     
                    
					
					 <div class="mb-3 row">
                          <label for="html5-date-input" class="col-md-2 col-form-label">Current Location</label>
						  <div class="col-md-7">
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
						  </div>
						  <div class="col-md-3"><button class="btn btn-primary" onclick="getLocation()">Get My Current Location</button></div>
                        </div>
						<div class="row mb-3">
						  <div class="col-md-6">
                        <label for="formRange1" class="form-label">Distance Preference </label>
						<span class="text-right">10Kms</span>
                        <input type="range" class="form-range" id="formRange1" />
						<div class="form-check form-switch mb-2">
						
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                        <label class="form-check-label" for="flexSwitchCheckDefault">Only Show people in this range</label>
                      </div>
						</div>
						<div class="col-md-6">
                        <label for="formRange1" class="form-label">Age Prefrence </label>
						<span class="text-right">32</span>
                        <input type="range" class="form-range" id="formRange1" />
						<div class="form-check form-switch mb-2">
						
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                        <label class="form-check-label" for="flexSwitchCheckDefault">Only Show people in this range</label>
                      </div>
						</div>
                      </div>
					  <div class="row mb-3">
						  <div class="col-md-6">
                        <label for="formRange1" class="form-label">Block Contacts </label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                        <label class="form-check-label" for="flexSwitchCheckDefault">People in your contact list will not be able to see your profile</label>
                      </div>
						
						<div class="col-md-6">
                        <label for="formRange1" class="form-label">Read Reciepts </label>
						<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" /><br>
							<label class="form-check-label" for="flexSwitchCheckDefault">Read Message with No Ticks</label>
						
						</div>
                      </div>
					  <div class="row mb-3">
						  <div class="col-md-6">
							<label for="formRange1" class="form-label">Push Notifications </label>
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" /><br>
							<label class="form-check-label" for="flexSwitchCheckDefault">Send Notifications</label>
						  </div>
						
							<div class="col-md-6">
							<label for="formRange1" class="form-label">Email Notifications </label>
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" /><br>
							<label class="form-check-label" for="flexSwitchCheckDefault">Send Notifications</label>
						  </div>
							</div>
							  <div class="row mb-3">
						  <div class="col-md-6">
							<label for="formRange1" class="form-label">Send Notifications when Online</label>
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" /><br>
							<label class="form-check-label" for="flexSwitchCheckDefault">Send Notifications</label>
						  </div>
						
							<div class="col-md-6">
							<label for="formRange1" class="form-label">Email Notifications </label>
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" /><br>
							<label class="form-check-label" for="flexSwitchCheckDefault">Send Notifications</label>
						  </div>
							</div>
                <div class="col-md-3"><button class="btn btn-primary" onclick="getLocation()">Save Changes</button></div>
                 
                    <!-- /Notifications -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
           
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

  
	<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
  </body>
</html>
