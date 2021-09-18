<div class="container">
  <div class="row">
    <div class="col-lg-2 col-md-2 hidden-sm-down">
      <?php include realpath(__DIR__ . "/../") . '/partial/sidebar.php' ?>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-12">
      <div class="card bg-light">
        <div class="card-body">
          <h1 class="display-4 text-center">Info Page</h1>
          <hr>
          <table class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead>
            <tr>
              <th>$_SERVER</th>
              <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($_SERVER as $key => $value) {
              echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
