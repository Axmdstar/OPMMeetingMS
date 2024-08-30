<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - OPM Meeting MS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Links -->
  <?php include 'links.php' ?>
  
  <!-- =======================================================
  * Sytem Name: OPM Meeting MS
  * Build: Aug 28 2024 
  * Author: eBulaal.com
  * License: https://eBulaal.com
  ======================================================== -->
</head>

<body>

  <?php
  //  <!-- ======= Header ======= -->
   include 'headers.php';
  //  <!-- ======= End Header ======= -->
  
  // <!-- ======= Sidebar ======= -->
  include 'sidebars.php';
  // <!-- End Sidebar-->
    ?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Meetings Summary Section -->
        <div class="col-12">
          <div class="row">
            <!-- Upcoming Meeting Card -->
            <div class="col-12 col-md-4 mb-4 mr-md-4">
              <div class="card info-card sales-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
                <div class="card-body">
                  <h5 class="card-title">Upcoming Meeting <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-event"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Held Meeting Card -->
            <div class="col-12 col-md-4 mb-4 mr-md-4">
              <div class="card info-card revenue-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
                <div class="card-body">
                  <h5 class="card-title">Held Meeting <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>264</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Total Participants Card -->
            <div class="col-12 col-md-4 mb-4">
              <div class="card info-card customers-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
                <div class="card-body">
                  <h5 class="card-title">Total Participants <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Meetings Summary Section -->
    
        
    
        <!-- Recent Meeting Speech Section -->
        <div class="col-12">
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Recent Meeting Speech<span> | Today</span></h5>
              <div class="activity">
                <div class="activity-item d-flex">
                  <div class="activite-label" style="width: 140px; overflow: hidden; text-overflow:ellipsis; text-wrap:nowrap; margin-right: 10px"><p >Nuur Cali Ahmed maxmed</p> </div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Arinta Itopia Waa inaa Wax badan laga qabtaaa. <a href="#" class="fw-bold text-dark">see more..</a>
                  </div>
                </div><!-- End activity item-->
                <div class="activity-item d-flex">
                  <div class="activite-label" style="width: 140px; overflow: hidden; text-overflow:ellipsis; text-wrap:nowrap; margin-right: 10px"><p >Maxamed Axmed Nuur</p> </div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                  Arinta Kenya Waa waajib ah in laga hortago qabtaaa. <a href="#" class="fw-bold text-dark">see more..</a>
                  </div>
                </div><!-- End activity item-->
              </div><!-- End activmargin
            </div><!-- End card-body -->
          </div><!-- End Recent Meeting Speech Section -->
        </div>
      </div>
    </section>
    
    <!-- Table section  -->
    <section class="section dashboard">
          <!-- Recent Meeting Section -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
        
              <div class="card-body">
                <h5 class="card-title">Recent Meeting <span>| Today</span></h5>
        
                <div class="table-responsive">
                  <table  id="example" class="display nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">Meet #Id</th>
                        <th scope="col">Agenda</th>
                        <th scope="col">Location</th>
                        <th scope="col">Total Participants</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#2457</td>
                        <td>Badda</td>
                        <td>Villa Reys</td>
                        <td style="text-align: center;">64</td>
                        <td>27/8/2024</td>
                        <td>8:00 AM</td>
                        <td>2:00 PM</td>
                        <td>8 Hours</td>
                        <td><span class="badge bg-danger">Live</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- End table-responsive -->
              </div><!-- End card-body -->
            </div><!-- End Recent Meeting Section -->
          </div>
        </section>
    

  </main><!-- End #main -->
 <?php
  // <!-- ======= Footer ======= -->
  include 'footer.php';
?>
  
  <?php include'scripts.php';?>

</body>

</html>