<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <!-- <img src="img/logo/logo2.png"> -->
    </div>
    <div class="sidebar-brand-text mx-3">Project Apps</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Project
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReqSales" aria-expanded="true"
      aria-controls="collapseReqSales">
      <i class="fas fa-fw fa-table"></i>
      <span>Project</span>
    </a>
    <div id="collapseReqSales" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url('/project');?>">List</a>
        <a class="collapse-item" href="<?php echo base_url('/project/create');?>">Create</a>
      </div>
    </div>
  </li>
</ul>