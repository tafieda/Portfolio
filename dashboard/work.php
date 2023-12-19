<?php
include ('includes/header.php');
include ('includes/navbar.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Work</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Work</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">



            <!-- general form elements disabled -->
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">Services</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-file-alt"></i> Title</label>
                                    <input type="text" class="form-control is-info" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><i class="fas fa-folder-open"></i> Type</label>
                                    <input type="text" class="form-control is-info" placeholder="Enter Job Type">
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label for="" class="control-label"><i class="fas fa-notes-medical"></i> Description</label>
                            <textarea class="is-info" id="summernote"></textarea>
                        </div>
                        <button type="button" class="btn btn-block bg-gradient-danger">Success</button>

                    </form>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include ('includes/footer.php');
?>