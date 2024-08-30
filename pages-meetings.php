<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meetings - OPM Meeting MS</title>
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
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <!-- <li class="breadcrumb-item">Pages</li> -->
          <li class="breadcrumb-item active">Meetings</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <!-- Recent Meeting Section -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <!-- Border separating buttons from "Recent Meeting" -->
              <div style="border-top: 1px solid #cacfcb;"></div>
              <div class="d-flex justify-content-between align-items-center p-2" style="margin-bottom: 15px;">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#CreateMeeting">
                  <i class="bi bi-plus me-1"></i> Add New Meeting
                </button>

                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteAlert">
                  <i class="bi bi-trash me-1"></i> Delete All
                </button>
              </div>
              <!-- Card body and table content -->
              <div class="card-body">
                <h5 class="card-title">Meeting List</h5>

                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">Meet #Id</th>
                        <th scope="col">Agenda</th>
                        <th scope="col">Location</th>
                        <th scope="col">Total Participants</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#2457</td>
                        <td style="text-align: center;">
                          <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#agendaModal">
                            <i class="bi bi-eye"></i>
                          </button>
                        </td>
                        <td>Villa Reys</td>
                        <td class="text-center">64</td>
                        <td>27/8/2024</td>
                        <td>8:00 AM</td>
                        <td>2:00 PM</td>
                        <td>8 Hours</td>
                        <td style="text-align: center;"><span class="badge bg-danger">Live</span></td>
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

    <!-- Delete Modal  -->
    <div class="modal fade" id="DeleteAlert" tabindex="-1">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete All Meetings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          Are you Sure This will <strong>Remove All Meetings</strong> in the Database !! 
          </div>
          <div class="modal-footer" style="justify-content: space-between !important;">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Delete All</button>
          </div>
        </div>
      </div>
    </div><!-- End Small Modal-->

    <!-- Create Meeting Modal -->
    <div class="modal fade" id="CreateMeeting" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create Meeting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <form >
                
                <!-- agende -->
              <div class="row mb-3">
                  <!-- <label for="inputText" class=" col-form-label">Agenda:</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control">
                  </div> -->
                  <label class="col-sm-2 col-form-label">Agenda</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
              </div>
              
                <!-- location and Date  -->
              <div class="row mb-3">

                <div class="col-sm-6">
                  <label class=" col-form-label">Location</label>
                  <div class="">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="col-sm-6">
                    <label for="inputDate" class=" col-form-label">Date:</label>
                    <div class="">
                      <input type="date" class="form-control">
                    </div>
                  </div>
              </div>

              <!-- start time and end time  -->
              <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="inputText" class=" col-form-label">Start Time:</label>
                    <div class="">
                      <input type="time" class="form-control">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <label for="inputText" class=" col-form-label">End Time:</label>
                    <div class="">
                      <input type="time" class="form-control">
                    </div>
                  </div>
              </div>
              
              <!-- duration -->
              <div class="row mb-3">
                  <!-- <label for="inputText" class=" col-form-label">Duration</label>
                  <div class="">
                    <input type="range" class="form-range " min="0" max="3" value="0" id="timerange">
                  </div>
                  <label class="form-label">hours <span id="timetext">0</span></label> -->
                  <div class="col-sm-6">
                    <label for="inputText" class=" col-form-label">Duration:</label>
                    <div class="">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <label for="inputText" class=" col-form-label">Number of Participants:</label>
                    <div class="">
                      <input type="number" class="form-control">
                    </div>
                  </div>
              </div>

              </form>
            </div>
          <div class="modal-footer" style="justify-content: space-between !important;">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Create Meeting</button>
          </div>
        </div>
      </div>
    </div><!-- End Large Modal-->

    <!-- Agenda Modal  -->
    <div class="modal fade" id="agendaModal" tabindex="-1">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Agenda</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
          </div>
          <div class="modal-footer" style="justify-content: space-between !important;">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div><!-- End Small Modal-->


  </main><!-- End #main -->


  <?php
  // <!-- ======= Footer ======= -->
  include 'footer.php';
  ?>

  <?php include 'scripts.php'; ?>
</body>

</html>