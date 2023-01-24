<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link href="<?= base_url('img/logo/logo.png') ?>" rel="icon"> -->
  <title>Simple Project Management</title>
  <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('css/ruang-admin.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" >
  <?php if(isset($js['datatable'])) { ?>
  <link href="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  <?php } ?>
</head>

<script>
  var JS_BASE_URL = "<?php echo base_url();?>";
</script>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?= $this->include('layout/sidebar') ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?= $this->include('layout/page_header') ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <?= $this->renderSection('content') ?>
          <!-- Modal Logout -->
          <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div> -->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?= $this->include('layout/footer') ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('js/ruang-admin.min.js') ?>"></script>
  <script src="<?= base_url('vendor/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
  <?php if(isset($js['datatable'])) { ?>
  <script src="<?= base_url('vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
  <?php } ?>

</body>

<?= $this->renderSection('script') ?>



</html>