
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- https://code.jquery.com/jquery-3.7.1.js
https://cdn.datatables.net/2.1.4/js/dataTables.js
https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js
https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.dataTables.js
https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js
https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.dataTables.js"></script>
  <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
  <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
  
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>"; -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>";
        
  <script>
    // Get the current URL path
    const currentLocation = window.location.href;

    // Get all nav-links
    const navLinks = document.querySelectorAll('.nav-link');

    // Loop through each nav-link and check if its href matches the current URL
    navLinks.forEach(link => {
      // Check if the link's href matches the current location
      if (link.href === currentLocation) {
        // Remove the 'collapsed' class in case it conflicts
        link.classList.remove('collapsed');
        // Add the 'active' class to the matching nav-link
        link.classList.add('active');
      }
    });

  </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
