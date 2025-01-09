<!DOCTYPE html>
<html lang="en">

<?php
// Include the head section (meta tags, title, CSS links)
include_once '../layouts/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <?php
    // Include the navigation bar and sidebar
    include_once '../layouts/nav.php';
    include_once '../layouts/aside.php';
    ?>

    <main class="py-4">
      <div class="content-wrapper p-3">
        <!-- Card container for the main content -->
        <div class="card card-info ">

          <!-- Card Header -->
          <div class="card-header border-transparent">
            <h3 class="h3">tableau de bord</h3>
          </div>

          <!-- Row with statistics boxes -->
          <div class="row m-3">
            <!-- Students number Box -->
            <div class="col-lg-4 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>200</h3>
                  <p>Candidats</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>

            <!-- Accepted Students Box -->
            <div class="col-lg-4 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>75</h3>
                  <p>Étudiants Acceptés</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user"></i>
                </div>
              </div>
            </div>

            <!-- Declliered Students Box -->
            <div class="col-lg-4 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
                  <p>Étudiants Refusés</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-slash"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Card Body with Table -->
          <div class="card-body">
            <div class="table table-striped table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Note</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Amazu</td>
                    <td>Ayoub</td>
                    <td>20</td>
                    <td>01/09/2024</td>
                  </tr>
                  <tr>
                    <td>Aoulad Amar</td>
                    <td>Samir</td>
                    <td>15</td>
                    <td>01/09/2024</td>
                  </tr>
                  <tr>
                    <td>Azizi</td>
                    <td>Zakaria</td>
                    <td>12</td>
                    <td>02/09/2024</td>
                  </tr>
                  <tr>
                    <td>Bardich</td>
                    <td>Oussama</td>
                    <td>17</td>
                    <td>02/09/2024</td>
                  </tr>
                  <tr>
                    <td>BASRI </td>
                    <td>Yahya</td>
                    <td>09</td>
                    <td>03/09/2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Card Footer with pagination -->
          <div class="card-footer d-flex justify-content-center bg-white">
            <ul class="pagination m-0">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link bg-info" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
      </div>
    </main>

    <?php
    // Include the footer
    include_once '../layouts/footer.php';
    ?>
  </div>

  <?php
  // Include JavaScript files and dependencies
  include_once '../layouts/script-link.php';
  ?>
</body>

</html>
