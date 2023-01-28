<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Project</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Project</li>
        <li class="breadcrumb-item active" aria-current="page"> <a href="./list">Create</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Create Project</h6>
            </div>
            <div class="card-body">
                <form method = "POST" action = "<?= base_url('project/store') ?>">
                    <div class="form-group">
                        <label for="simpleDataInput">Project Name</label>
                        <input class="form-control mb-3" type="text" name = "project_name">
                    </div>
                    <div class="form-group">
                        <label for="simpleDataInput">Start Date</label>
                        <div class="input-group date">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" name = "start_date" class="form-control" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="simpleDataInput">End Date</label>
                        <div class="input-group date">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" name = "end_date" class="form-control" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="simpleDataInput">Description</label>
                        <textarea class="form-control mb-3" name = "description"></textarea>
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