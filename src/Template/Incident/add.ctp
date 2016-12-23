<div class="row">
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="" alt="User Avatar">
                </div><!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $person['fname'].' '.$person['lname']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $person['id']; ?></h5>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li><a href="#">Nationality:<span class="pull-right"><?php echo $person['nationality']; ?></span></a></li>
                    <li><a href="#">Date Of Birth:<span class="pull-right"><?php echo $person['dob']; ?></span></a></li>
                    <li><a href="#">Marital Status:<span class="pull-right"><?php echo $person['maritialStatus']; ?></span></a></li>
                    <li><a href="#">Passport Number:<span class="pull-right"><?php echo $person['passportNo']; ?></span></a></li>
                </ul>
            </div>
        </div><!-- /.widget-user -->
    </div><!-- /.col -->
        <?php echo $this->Form->create(); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Incident Report</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                            <?php echo $this->Form->input('incident_name', array('label'=>'Incident Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <label>Incident Details:</label>
                        <textarea class="form-control" name="incident_details"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Event:</label>
                        <select class="form-control" name="events_idevents">
                            <option value="">---Event---</option>
                            <?php foreach ($events as $key => $value): ?>
                            <option value="<?php echo $value['idevents'];?>"><?php echo $value['event_name'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('company_details_id', array('label'=>'Company ID:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <label>Border Station:</label>
                        <select class="form-control" name="stations_idstations">
                            <option value="">---Border Station---</option>
                            <?php foreach ($bstations as $key => $value): ?>
                            <option value="<?php echo $value['idstations'];?>"><?php echo $value['station_names'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
