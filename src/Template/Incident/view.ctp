<div class="row">
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="" alt="User Avatar">
                </div><!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $incident['person']['fname'].' '.$incident['person']['lname']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $incident['person']['id']; ?></h5>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li><a href="#">Nationality:<span class="pull-right"><?php echo $incident['person']['nationality']; ?></span></a></li>
                    <li><a href="#">Date Of Birth:<span class="pull-right"><?php echo $incident['person']['dob']; ?></span></a></li>
                    <li><a href="#">Marital Status:<span class="pull-right"><?php echo $incident['person']['maritialStatus']; ?></span></a></li>
                    <li><a href="#">Passport Number:<span class="pull-right"><?php echo $incident['person']['passportNo']; ?></span></a></li>
                </ul>
            </div>
        </div><!-- /.widget-user -->
    </div><!-- /.col -->
    <div class="col-md-8">
        <!-- Horizontal Form -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Incident Details</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Incident Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" value="<?php echo $incident['incident_name']; ?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Incident Details:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" disabled=""><?php echo $incident['incident_details']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Incident Station:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" value="<?php echo $incident['stations_idstations']; ?>" readonly="readonly">
                        </div>
                    </div>
            </form>
        </div><!-- /.box -->
    </div><!-- /.row -->
    <div class="row">

    </div>