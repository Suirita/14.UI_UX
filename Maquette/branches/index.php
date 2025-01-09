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
        <div class="card card-info">

          <!-- Card Header -->
          <div class="card-header border-transparent">
            <h3 class="h3">Files</h3>
          </div>

          <!-- Row with add button -->
          <div class="row m-2">
            <div class="col-12">
              <a href="./create.php" class="btn btn-md btn-info float-right">Ajouter Branche</a>
            </div>
          </div>

          <!-- Card Body with Table -->
          <div class="card-body p-0">
            <div class="table table-striped table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>Branche</th>
                    <th>Questions</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Français</td>
                    <td>2</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="./edit.php" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href=" #" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Anglais</td>
                    <td>1</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="./edit.php" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Technical</td>
                    <td>3</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="./edit.php" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Soft Skills</td>
                    <td>2</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="./edit.php" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Team</td>
                    <td>1</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="./edit.php" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Card Footer -->
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
