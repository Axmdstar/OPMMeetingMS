<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meeting-Participents - OPM Meeting MS</title>
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
      <h1>Participants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <!-- <li class="breadcrumb-item">Pages</li> -->
          <li class="breadcrumb-item active">Participants</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard" style="">
      <!-- Recent Meeting Section -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <!-- Border separating buttons from "Recent Meeting" -->
              <div style="border-top: 1px solid #cacfcb;"></div>
              <div class="d-flex justify-content-between align-items-center p-2" style="margin-bottom: 15px;">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#CreateMeeting">
                  <i class="bi bi-plus me-1"></i> Add New Participants
                </button>

                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteAlert">
                  <i class="bi bi-trash me-1"></i> Delete All
                </button>
              </div>
              <!-- Card body and table content -->
              <div class="card-body">
                <h5 class="card-title">Participants List</h5>

                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                      <tr>
                      <!-- `participant_id` varchar(50) NOT NULL,
                      `first_name` varchar(255) NOT NULL,
                      `last_name` varchar(255) NOT NULL,
                      `email` varchar(255) NOT NULL,
                      `tel` varchar(20) DEFAULT NULL,
                      `type` enum('Secretary','Chairperson','Staff','Participant') DEFAULT NULL,
                      `participant_picture` text DEFAULT NULL,
                      `meeting_id` varchar(50) DEFAULT NULL 
                      -->
                        <th scope="col">Participant_id</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Type</th>
                        <th scope="col">Participant picture</th>
                        <th scope="col">Meeting id</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#2457</td>
                        <td>Villa </td>
                        <td >Reys</td>
                        <td>Meeting@mail.com</td>
                        <td>0651489751</td>
                        <td>Participant</td>
                        <td>image_Url</td>
                        <td>#2457</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- End table-responsive -->
              </div><!-- End card-body -->
            </div><!-- End Recent Meeting Section -->
          </div>
        </div>
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