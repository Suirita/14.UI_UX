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
            <h3 class="h3">Entretien d'inscription</h3>
          </div>

          <!-- Card Body -->
          <div class="card-body">
            <form action="dashboard.php" method="post">
              <div class="form-group">
                <label for="FirstName">Nom</label>
                <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="Nom">
              </div>

              <div class="form-group">
                <label for="LastName">Prénom</label>
                <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Prénom">
              </div>

              <!-- Accordion Section -->
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Option 1
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="question1">Question 1</label>
                        <input type="range" class="form-control-range" id="question1" name="question1" min="1" max="5" step="1" style="background: linear-gradient(to right, red, yellow, green);">
                      </div>

                      <div class="form-group">
                        <label for="question2">Question 2</label>
                        <input type="range" class="form-control-range" id="question2" name="question2" min="1" max="5" step="1" style="background: linear-gradient(to right, red, yellow, green);">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Option 2
                      </button>
                    </h5>
                  </div>

                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="question3">Question 3</label>
                        <input type="range" class="form-control-range" id="question3" name="question3" min="1" max="5" step="1" style="background: linear-gradient(to right, red, yellow, green);">
                      </div>

                      <div class="form-group">
                        <label for="question4">Question 4</label>
                        <input type="range" class="form-control-range" id="question4" name="question4" min="1" max="5" step="1" style="background: linear-gradient(to right, red, yellow, green);">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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

  <script>
    // Optional: JavaScript to update the gradient as the range slider value changes
    document.querySelectorAll('input[type="range"]').forEach(slider => {
      slider.addEventListener('input', function() {
        const percentage = ((this.value - this.min) / (this.max - this.min)) * 100;
        this.style.background = `linear-gradient(to right, yellow ${percentage}%, orange ${percentage + 5}%, red 100%)`;
      });
    });
  </script>
</body>

</html>
