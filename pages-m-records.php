<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meeting-Records - OPM Meeting MS</title>
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
      <h1>Meetings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <!-- <li class="breadcrumb-item">Pages</li> -->
          <li class="breadcrumb-item active">Meeting Records</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Multi Columns Form</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Meetings</label>
              <select class="form-select" aria-label="Default select example">
                <option selected="">Select Meeting</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword5">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- End Multi Columns Form -->

      </div>
    </div>
  </main><!-- End #main -->


  <?php
  // <!-- ======= Footer ======= -->
  include 'footer.php';
  ?>

  <?php include 'scripts.php'; ?>
</body>

</html>