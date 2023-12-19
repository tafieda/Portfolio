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
                    <h1>Education</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Education</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">



            <!-- general form elements disabled -->
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Educational Attainment</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-school"></i> School</label>
                                    <input type="text" class="form-control is-info" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><i class="fas fa-graduation-cap"></i> Degree</label>
                                    <input type="text" class="form-control is-info" placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="" class="control-label"><i class="far fa-calendar-alt"></i>
                                        Month</label>
                                    <select name="month" id="" class="select custom-select custom-select-sm is-info">
                                        <?php 
									for ($m=1; $m<=12; $m++) {
									     $_month = date('F', mktime(0,0,0,$m, 1, date('Y')));
									     echo "<option ".((isset($month) && $month == $_month) ? "selected" : "").">" .$_month.'</option>';
									    }
								?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><i class="fas fa-calendar"></i> Year</label>
                                    <select name="year" id="" class="select custom-select custom-select-sm is-info">
                                        <?php 
									for ($y =0; $y < 100; $y++) {
									     $_year = date('Y') - $y;
									     echo "<option ".((isset($year) && $year == $_year) ? "selected" : "").">" .$_year.'</option>';
									    }
								?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label"><i class="fas fa-notes-medical"></i> Description</label>
                            <textarea class="is-info" id="summernote"></textarea>
                        </div>
                        <button type="button" class="btn btn-block bg-gradient-success">Success</button>

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