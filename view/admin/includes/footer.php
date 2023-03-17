  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/lib/chart/chart.min.js"></script>
  <script src="../assets/lib/easing/easing.min.js"></script>
  <script src="../assets/lib/waypoints/waypoints.min.js"></script>
  <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
  <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="../assets/js/main.js"></script>


  
  <script>
    function includePage(path) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dashboard-content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", path, true);
        xhttp.send();
    }
    includePage('todos/index.php');
</script>

  </body>

  </html>