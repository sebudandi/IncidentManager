<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User Roles</h3>
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
                            <th>Role Name</th>
                            <th>Role Denotor</th>
                            <th>Role Creator</th>
                            <th>Allowed Accesses</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($roles as $key=>$value): ?>
                        <tr>
                            <td><?php echo $value['access_name']; ?></td>
                            <td><?php echo $value['access_denotor']; ?></td>
                            <td><?php echo $value['creator_access']; ?></td>
                            <td><?php echo $value['allowed_access']; ?></td>
                            <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'manage', 'action' => 'editrole', $value['record_id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'manage', 'action' => 'viewrole', $value['record_id']), 
    array('escape' => false)); ?>
                            </td>
                        </tr> 
                        <?php endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->