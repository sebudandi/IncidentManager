<div class="row">
    <?php echo $this->Form->create(); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Role:</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                    <div class="form-group">
                        <?php echo $this->Form->input('access_name', array('label'=>'Access Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('access_denotor', array('label'=>'Access Denotor:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <label>Creator Access:</label>
                        <select class="form-control" name="creator_access">
                            <option value="">---Creator Access---</option>
                            <?php foreach ($roles as $key => $value): ?>
                            <option value="<?php echo $value['record_id'];?>"><?php echo $value['access_name'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div c
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
