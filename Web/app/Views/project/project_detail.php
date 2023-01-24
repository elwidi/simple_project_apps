<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Project</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Project</li>
        <li class="breadcrumb-item active" aria-current="page"> <a href="./list">List</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-6">
        <!-- Dropdown Basics -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Project Detail</h6>
            </div>
            <div class="card-body">
                <p class = "font-weight-bold">Project Name  </p>
                <p><? echo $project['project_name'];?></p>

                <p class = "font-weight-bold">Project Planned Period  </p>
                <p><? echo date('d/m/Y', strtotime($project['start_date'])) ." - ".date('d/m/Y', strtotime($project['end_date']));?> </p>

                <p class = "font-weight-bold">Description  </p>
                <p><? echo $project['description'];?></p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- Dropdowns Sizing -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Milestone</h6>
            </div>
            <div class="card-body">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Milestone</th>
                        <th>Status</th>
                        <th>Start</th>
                        <th>End</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Phase 1</td>
                        <td>Done</td>
                        <td>2023-01-01</td>
                        <td>2023-01-07</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Team</h6>
            </div>
            <div>
                <div class="customer-message align-items-center">
                <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Annisa Azizah</div>
                    <div class="small text-gray-500 message-time font-weight-bold">Project Manager</div>
                </a>
                </div>
                <div class="customer-message align-items-center">
                <a href="#">
                    <div class="text-truncate message-title font-weight-bold">Budi Santoso
                    </div>
                    <div class="small text-gray-500 message-time">Project Planner</div>
                </a>
                </div>
                <div class="customer-message align-items-center">
                <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Ade Cahyadi
                    </div>
                    <div class="small text-gray-500 message-time font-weight-bold">Front-end Developer</div>
                </a>
                </div>
                <div class="customer-message align-items-center">
                <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Faiz Rizki
                    </div>
                    <div class="small text-gray-500 message-time font-weight-bold">Back-end Developer</div>
                </a>
                </div>
                <div class="card-footer text-center">
                <a class="m-0 small text-primary card-link" href="#">View More <i
                    class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <!-- Dropdowns Sizing -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Task Progress</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                <div class="small text-gray-500">Mockup Design
                    <div class="small float-right"><b>600 of 800 Items</b></div>
                </div>
                <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                <div class="mb-3">
                <div class="small text-gray-500">Front-End
                    <div class="small float-right"><b>500 of 800 Items</b></div>
                </div>
                <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                <div class="mb-3">
                <div class="small text-gray-500">Back-End
                    <div class="small float-right"><b>455 of 800 Items</b></div>
                </div>
                <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                <div class="mb-3">
                <div class="small text-gray-500">UAT
                    <div class="small float-right"><b>400 of 800 Items</b></div>
                </div>
                <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                <div class="mb-3">
                <div class="small text-gray-500">Delivery
                    <div class="small float-right"><b>200 of 800 Items</b></div>
                </div>
                <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <!-- Dropdowns Sizing -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Task List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">RA0449</a></td>
                        <td>Udin Wayang</td>
                        <td>Nasi Padang</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>Gundam 90' Edition</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>Oblong T-Shirt</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>Hat Rounded</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>Baby Powder</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>