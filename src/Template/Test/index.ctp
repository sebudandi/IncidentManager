<div class="row">
    <?php echo $this->Form->create('Test', array('enctype' => 'multipart/form-data')); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Additional Details:</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                    <div class="form-group">
                        <?php echo $this->Form->file('file', array('label'=>'Photo:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
