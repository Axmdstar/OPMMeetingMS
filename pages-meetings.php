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
  include 'db_connection.php';
  // <!-- ======= Sidebar ======= -->
  include 'sidebars.php';
  // <!-- End Sidebar-->
  echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>";

  


  if (isset($_POST['submit'])) {
    // Capture form data
    $meeting_agenda = $_POST['meeting_agenda'];
    $meeting_location = $_POST['meeting_location'];
    $meeting_date = $_POST['meeting_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $meeting_duration = $_POST['meeting_duration'];
    $total_participants = $_POST['total_participants'];

    // Combine date and start time to create the datetime for meeting_date
    $meeting_date = $meeting_date . ' ' . $start_time . ':00';

    // Insert data into the `meeting` table
    $sql = "INSERT INTO meeting (meeting_id, meeting_agenda, meeting_location, meeting_duration, meeting_date, total_participants, meeting_status)
              VALUES (UUID(), ?, ?, ?, ?, ?, 'Upcoming')";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $meeting_agenda, $meeting_location, $meeting_duration, $meeting_date, $total_participants);

    if ($stmt->execute()) {
      echo "<script>
        $(document).ready(function() {
            toastr.options = {
                closeButton: true,
                positionClass: 'toast-bottom-left',
            };
            toastr.success('Meeting created successfully!');
        });
      </script>";
    } else {
      echo "<script>
                        $(document).ready(function() {
                            toastr.options = {
                closeButton: true,
                positionClass: 'toast-bottom-left',
            };
            
            toastr.error('Error: " . $stmt->error . "');
                        });
                      </script>";
    }

    $stmt->close();
  }



  if (isset($_POST['delete_all'])) {
    // SQL query to delete all records from the `meeting` table
    $sql = "DELETE FROM meeting";

    if ($conn->query($sql) === TRUE) {
      echo "<script>
                $(document).ready(function() {
                    toastr.options = {
                closeButton: true,
                positionClass: 'toast-bottom-left',
            };
            
              toastr.success('All meetings have been deleted successfully.');
                });
              </script>";
    } else {
      echo "<script>
                $(document).ready(function() {
                    toastr.options = {
                closeButton: true,
                positionClass: 'toast-bottom-left',
            };
            
            toastr.error('Error deleting meetings: " . $conn->error . "');
            });
        </script>";
    }
  }



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

      <?php
      $sql = "SELECT meeting_id, meeting_agenda, meeting_location, total_participants, 
        meeting_date, TIME_FORMAT(meeting_date, '%h:%i %p') as start_time,
        TIME_FORMAT(ADDTIME(meeting_date, meeting_duration), '%h:%i %p') as end_time,
        TIMEDIFF(ADDTIME(meeting_date, meeting_duration), meeting_date) as duration, meeting_status 
        FROM meeting";
      $result = $conn->query($sql);
      ?>

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

                      <?php
                      if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>#" . $row['meeting_id'] . "</td>";
                          echo '<td style="text-align: center;">
                <button type="button" class="btn btn-success btn-sm viewAgendaBtn" data-agenda="' . htmlspecialchars($row['meeting_agenda'], ENT_QUOTES, 'UTF-8') . '" data-bs-toggle="modal" data-bs-target="#agendaModal">
                    <i class="bi bi-eye"></i>
                </button>
              </td>';
                          echo "<td>" . $row['meeting_location'] . "</td>";
                          echo "<td class='text-center'>" . $row['total_participants'] . "</td>";
                          echo "<td>" . date("d/m/Y", strtotime($row['meeting_date'])) . "</td>";
                          echo "<td>" . $row['start_time'] . "</td>";
                          echo "<td>" . $row['end_time'] . "</td>";
                          echo "<td>" . $row['duration'] . "</td>";
                          echo "<td style='text-align: center;'><span class='badge " . ($row['meeting_status'] == 'Live' ? 'bg-danger' : 'bg-secondary') . "'>" . $row['meeting_status'] . "</span></td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='9'>No meetings found</td></tr>";
                      }
                      ?>

                      <!-- <tr>
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
                    </tbody> -->
                  </table>
                </div><!-- End table-responsive -->
              </div><!-- End card-body -->
            </div><!-- End Recent Meeting Section -->
          </div>
        </div>
      </div>
    </section>

    <!-- Delete Modal  -->
    <!-- Delete All Meetings Modal -->
    <div class="modal fade" id="DeleteAlert" tabindex="-1">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete All Meetings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure? This will <strong>remove all meetings</strong> from the database!
          </div>
          <div class="modal-footer" style="justify-content: space-between !important;">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            <!-- Form to trigger deletion -->
            <form method="POST" action="pages-meetings.php">
              <button type="submit" name="delete_all" class="btn btn-danger">Delete All</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Create Meeting Modal -->
    <div class="modal fade" id="CreateMeeting" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create Meeting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">



            <form method="POST" action="pages-meetings.php">

              <!-- agenda -->
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Agenda</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="meeting_agenda" style="height: 100px"></textarea>
                </div>
              </div>

              <!-- location and Date  -->
              <div class="row mb-3">
                <div class="col-sm-6">
                  <label class="col-form-label">Location</label>
                  <div class="">
                    <input type="text" class="form-control" name="meeting_location">
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="inputDate" class="col-form-label">Date:</label>
                  <div class="">
                    <input type="date" class="form-control" name="meeting_date">
                  </div>
                </div>
              </div>

              <!-- start time and end time  -->
              <div class="row mb-3">
                <div class="col-sm-6">
                  <label for="inputText" class="col-form-label">Start Time:</label>
                  <div class="">
                    <input type="time" class="form-control" name="start_time">
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="inputText" class="col-form-label">End Time:</label>
                  <div class="">
                    <input type="time" class="form-control" name="end_time">
                  </div>
                </div>
              </div>

              <!-- duration and number of participants -->
              <div class="row mb-3">
                <div class="col-sm-6">
                  <label for="inputText" class="col-form-label">Duration:</label>
                  <div class="">
                    <input type="text" class="form-control" name="meeting_duration">
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="inputText" class="col-form-label">Number of Participants:</label>
                  <div class="">
                    <input type="number" class="form-control" name="total_participants">
                  </div>
                </div>
              </div>

              <div class="modal-footer" style="justify-content: space-between !important;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="submit">Create Meeting</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div><!-- End Large Modal-->

    <!-- Agenda Modal -->
<div class="modal fade" id="agendaModal" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Meeting Agenda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="agendaContent"></p> <!-- This is where the agenda content will be inserted -->
      </div>
      <div class="modal-footer" style="justify-content: space-between !important;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



  </main><!-- End #main -->

  <script>
    $(document).ready(function() {
  // When an agenda button is clicked
  $('.viewAgendaBtn').on('click', function() {
      // Get the agenda content from the data attribute
      var agenda = $(this).data('agenda');
      
      // Set the agenda content in the modal
      $('#agendaContent').text(agenda);
  });
});

  </script>


  <?php
  // <!-- ======= Footer ======= -->
  include 'footer.php';
  ?>

  <?php include 'scripts.php'; ?>
</body>

</html>