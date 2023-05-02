<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Onboarding</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                 <a href="index.html" class="app-brand-link gap-2">
                  <img src="../assets/img/elements/logo-final.png"/>
                </a>
                </div>
              </div>
              <!-- /Search -->

            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
                  <div class="row">
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                   
                     
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3 row">
                          <label for="html5-date-input" class="col-md-3 col-form-label">Full Name</label>
						  <div class="col-md-9">
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
						  </div>
                        </div>
                         <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-3 col-form-label">Date of Birth</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                        </div>
                      </div>
					   <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-3 col-form-label">Gender</label>
                        <div class="col-md-9">
                          <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-outline-primary">Man</button>
                        <button type="button" class="btn btn-outline-primary ">Women</button>
                        <button type="button" class="btn btn-outline-primary ">More</button>
                      </div>
                        </div>
						
						<div class="form-check form-switch mb-2">
						<br>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                        <label class="form-check-label" for="flexSwitchCheckDefault">Show Gender on my profile</label>
                      </div>
                      </div>
					   <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-3 col-form-label">Show Me</label>
                        <div class="col-md-9">
                          <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-outline-primary">Man</button>
                        <button type="button" class="btn btn-outline-primary ">Women</button>
                        <button type="button" class="btn btn-outline-primary ">More</button>
                      </div>
                        </div>
						
						
                      </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-email">Email Address</label>
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="john.doe"
                              aria-label="john.doe"
                              aria-describedby="basic-default-email2"
                            />
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
						 <hr class="m-0" />
                         <div class="mb-3 mt-3">
                      <label class="form-label" for="basic-default-email">Lets Know you More</label>
                      <div class="">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                         + Add Passion
                        </button> 
						<button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal2"
                        >
                         + Sexual Orientation
                        </button>
						<button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal3"
                        >
                         + Looking For
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Passions</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              <p>Let Everyone Know what you're passionate about by adding it to your profile</p>
							  <div class="demo-inline-spacing">
								<button type="button" class="btn rounded-pill btn-outline-primary">Dogs</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Maggie</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Travel</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Singing</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Dancing</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Movies</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Music</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Gadgets</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Pubg</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Sushi</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Sportify</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Running</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Writing</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Sneakers</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Yoga</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">House Parties</button>
								<button type="button" class="btn rounded-pill btn-outline-primary">Photography</button>
							  </div>
							  
							  
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
						
						<div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content modal-sm">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Sexual Orientation</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              
							  <div class="demo-inline-spacing">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Straight </label>
							    </div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Gay </label>
							    </div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Lesbian </label>
							    </div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Bisexual </label>
							    </div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Asexual </label>
							    </div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Queer </label>
							    </div>
							  </div>
							  <div class="form-check form-switch mb-2">
						<br>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                        <label class="form-check-label" for="flexSwitchCheckDefault">Show Sexual Orientation on my profile</label>
                      </div>
							  
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Continue</button>
                              </div>
                            </div>
                          </div>
                        </div>
						
						<div class="modal fade" id="basicModal3" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Right Now I'm Looking For</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                              <p>Increase Compatibility by sharing yours !</p>
							 <div class="row">
							 
								<div class="col-lg-4">
								<div class="cardbg">
								<span class="size">🎉</span>
									<h6>Short Term Fun</h6>
								</div>
								</div>
								<div class="col-lg-4">
								<div class="cardbg">
								<span class="size">🫶</span>
								<h6>New Friends</h6>
								</div>
								</div>
								<div class="col-lg-4">
								<div class="cardbg">
								<span class="size"> 🤔</span>
								<h6>Still Figuring Out</h6></div>
								</div>
							 </div>
							   <div class="row mt-3">
							 
								<div class="col-lg-4">
								<div class="cardbg">
								<span class="size">👩‍❤️‍💋‍👨</span>
									<h6>Long Term Relationship</h6>
								</div>
								</div>
								<div class="col-lg-4">
								<div class="cardbg">
								<span class="size">😍</span>
								<h6>Long Term and open to short</h6>
								</div>
								</div>
								<div class="col-lg-4">
								<div class="cardbg">
								<span class="size"> 🥂</span>
								<h6>Short Term, Open to Long</h6></div>
								</div>
							 </div>
							  
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
						
                      </div>
                    </div>
                        
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
            <div class="col-lg-6 card mb-4">
			 <div class="card-header d-flex justify-content-between align-items-center">
                   
                    <h4>Profile Photo</h4> 
                    </div>
			
			<br>
			<div class="row">
			<div class="col-md-4"><img src="../assets/img/elements/image-icon.png" class="rounded mx-auto d-block"/></div>
			<div class="col-md-4"><img src="../assets/img/elements/image-icon.png" class="rounded mx-auto d-block"/></div>
			<div class="col-md-4"><img src="../assets/img/elements/image-icon.png" class="rounded mx-auto d-block"/></div>
			</div>
			<br>
			<br>
			<div class="row">
			<div class="col-md-4"><img src="../assets/img/elements/image-icon.png" class="rounded mx-auto d-block"/></div>
			<div class="col-md-4"><img src="../assets/img/elements/image-icon.png" class="rounded mx-auto d-block"/></div>
			<div class="col-md-4"><img src="../assets/img/elements/image-icon.png" class="rounded mx-auto d-block"/></div>
			</div>
			<br>
			<h6 class="text-center">Add atleast 2 Photos to continue</h6>
			</div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Developed By by
                  <a href="https://basicmantra.com/" target="_blank" class="footer-link fw-bolder">Basic Mantra</a>
                </div>
                <div>
                  <a href="#" class="footer-link me-4" target="_blank">Terms & Conditions</a>
                  <a href="#" target="_blank" class="footer-link me-4">Privacy Policies</a>

                  <a
                    href="#"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >

                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
