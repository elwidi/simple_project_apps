<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-800">Project Team</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Project</li>
        <li class="breadcrumb-item active" aria-current="page"> <a href="./list">Project Team</a></li>
    </ol>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">List</h6>
        <a class="btn btn-primary btn-sm" href="<?= base_url('/project/team/create/'.$project_id) ?>">Add</a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush" id="table1">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Role</th>
              <th>Project Join Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function () {
      console.log(JS_BASE_URL);
      var table = $("#table1").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        // "scrollX": true,
        "autoWidth": false,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo base_url(); ?>/dt/project_team",
            "type": "POST"
        },
        "columnDefs": [
              {
                  render: function (data, type, row) {
                      return " <p>#"+row["id"]+" </p>";
                  },
                  orderable: true,
                  targets: 0
              },
              {
                  render: function (data, type, row) {
                      return " <p>"+row.name+"</p>";
                  },
                  orderable: false,
                  targets: 1
              },
              {
                  render: function (data, type, row) {
                      return " <p>"+row.role+"</p>";
                  },
                  orderable: false,
                  targets: 2
              },
              {
                  render: function (data, type, row) {
                      return " <p>"+row.project_join_date+"</p>";
                  },
                  orderable: true,
                  targets: 3
              },
              {
                  render: function (data, type, row) {
                    return " <a class = 'btn btn-sm btn-primary' href = '"+JS_BASE_URL+"/project/detail/"+row.id+"'><i class='fas fa-fw fa-eye'></i> </a>&nbsp;<a class = 'btn btn-sm btn-primary' href = '"+JS_BASE_URL+"/project/update/"+row.id+"'><i class='fas fa-fw fa-pen'></i> </a>&nbsp;<a class = 'btn btn-sm btn-danger delete-project' href = '#'><i class='fas fa-fw fa-trash'></i> </a> ";
                      // return " <p> </p>";
                  },
                  orderable: true,
                  targets: 4
              }   
                 
          ],
          fnDrawCallback : function (oSettings) {
              table_callback();
          }
      });
      

      var table_callback = function(){
        $('.delete-project').click(function(){
          // $('.')
        })

      }

    });
  </script>
  <?= $this->endSection() ?>