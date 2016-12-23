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
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Client</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                            <?php echo $this->Form->input('client_name', array('label'=>'Client Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('company_name', array('label'=>'Company Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('physical_address', array('label'=>'Physical Address:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('telephone_number', array('label'=>'Telephone Number:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="form-group">
                            <?php echo $this->Form->input('email_address', array('label'=>'Email Address:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div><!-- /.row -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Incident</h3>
                <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                         <th scope="col"><?= $this->Paginator->sort('incident_report') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incident_name') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('incident_details') ?></th>
                       
                        <th>Action</th>
                    </tr>
                        <?php foreach($incident as $key=>$value): ?>
                    <tr>
                <td><?php echo $value['incident_report']; ?></td>
                <td><?php echo $value['incident_name']; ?></td>
                <td><?php echo $value['incident_details']; ?></td>
                        <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'incident', 'action' => 'edit', $value['id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'incident', 'action' => 'view', $value['id']), 
    array('escape' => false)); ?>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>