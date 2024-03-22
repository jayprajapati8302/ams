!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>AMC</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="header.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">AMC</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="header.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="pincode.php" class="nav-link"><i data-feather="monitor"></i><span>Pincode Detail</span></a>
            </li>
            <li class="menu-header">User Details</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>User</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="add-product.php">Add Products</a></li>
                <li><a class="nav-link" href="tender-for-service.php">Tender For Service</a></li>
                <li><a class="nav-link" href="service-tender-acceptance.php">Service Tender Acceptance</a></li>
                <li><a class="nav-link" href="feedback-for-service.php">Feedback For Service</a></li>
                <li><a class="nav-link" href="feedback.php">My Feedback</a></li>
              </ul>
            </li>
           
            <li class="menu-header">Contractor Profile</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Contractor</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="Response-to-contract.php">Resonse to Service Request</a></li>
                <li><a class="nav-link" href="service-contract.php">Sevice Contract</a></li>
                <li><a class="nav-link" href="Tender for teqnician.php">Tender For Technician</a></li>
                <li><a class="nav-link" href="Acceptance of tech tender.php">Acceptance of Tech Tender</a></li>
                <li><a class="nav-link" href="Technician.php">Technician Assigned</a></li>
                <li><a class="nav-link" href="Feedback to Technician.php">Feedback to Technician</a></li>
              </ul>
            </li>
              <li class="menu-header">Technician Profile</li>
                <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="user-check"></i><span>Technician</span></a>
                <ul class="dropdown-menu">
                    <li><a href="Response-to-contract.php">Resonse to Contractor</a></li>
                    <li><a href="teqnician-contracts.php">Technician Contracts</a></li>
                    <li><a href="service-provided.php">Service Provided</a></li>
                    <!-- <li><a href="auth-reset-password.html">Reset Password</a></li>
                    <li><a href="subscribe.html">Subscribe</a></li> -->
                </ul>
              </li>
             
            </ul>
        </aside>
      </div
 


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Acceptance of tech tender details</h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label>pincode </label>
                      <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>product type </label>
                      <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                      </div>
                    
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </div>
                </div>
        </div>
                
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
</html>