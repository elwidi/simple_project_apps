<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Project</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Project</li>
        <li class="breadcrumb-item active" aria-current="page"> <a href = "#">Add New Team</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add Project Team</h6>
            </div>
            <div class="card-body">
                <form method = "POST" action = "<?= base_url('/project/team/store') ?>">
                    <div class="form-group">
                        <label for="simpleDataInput">Name</label>
                        <input type = "hidden" name = "project_id" value = "<? echo $project_id?>" >
                        <select class="form-control mb-3" type="text" name = "person_id">
                            <option value = ""></option>
                            <?php foreach($people as $i => $p){ ?>
                                <option value = "<?php echo $p['id']?>"><?php echo $p['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="simpleDataInput">Role</label>
                        <select class="form-control mb-3" type="text" name = "role">
                            <option value = ""></option>
                            <option value = "Project Manager">Project Manager</option>
                            <option value = "Functional Developer">Functional Developer</option>
                            <option value = "QA Tester">QA Tester</option>
                            <option value = "Back-end Developer">Back-end Developer</option>
                            <option value = "Front-End Developer">Front-End Developer</option>
                            <option value = "Build Release Engineer">Build Release Engineer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="simpleDataInput">Join Date</label>
                        <div class="input-group date">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" name = "project_join_date" class="form-control" id="simpleDataInput">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style = "float:right;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function () {

        $('.input-group.date').datepicker({
            format: 'dd-mm-yyyy',
            todayBtn: 'linked',
            todayHighlight: true,
            autoclose: true,        
        });
    })
</script>
<?= $this->endSection() ?>