<div class="row">
    <?php echo $this->Form->create($user); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Edit User:</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                        <?php echo $this->Form->input('full_name', array('label'=>'Full Name:', 'class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                        <?php echo $this->Form->input('username', array('label'=>'User Name:', 'class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                        <?php echo $this->Form->input('password', array('label'=>'Password:', 'class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <label>User Role:</label>
                    <select class="form-control" name="role">
                        <option value="">---User Role---</option>
                            <?php foreach ($roles as $key => $value): ?>
                        <option value="<?php echo $value['record_id'];?>" <?php if($user['role']==$value['record_id']) echo 'Selected'; ?>><?php echo $value['access_name'];?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status:</label>
                    <select class="form-control" name="status">
                        <option value="">---Status---</option>
                        <option value="Active" <?php if($user['status']=='Active') echo 'Selected'; ?>>Active</option>   
                        <option value="Suspended" <?php if($user['status']=='Suspended') echo 'Selected'; ?>>Suspended</option>
                        <option value="Closed" <?php if($user['status']=='Closed') echo 'Selected'; ?>>Closed</option>
                    </select>
                </div>
                
                     <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
