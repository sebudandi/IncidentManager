<div class="row">
    <?php echo $this->Form->create(); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Operation:</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                        <?php echo $this->Form->input('menu_title', array('label'=>'Menu Name:', 'class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                        <?php echo $this->Form->input('load_page', array('label'=>'Load Page URL:', 'class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                        <?php echo $this->Form->input('css', array('label'=>'CSS:', 'class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <label>Parent Option:</label>
                    <select class="form-control" name="parent_option">
                        <option value="">---Parent Option---</option>
                            <?php foreach ($opslist as $key => $value): ?>
                        <option value="<?php echo $value['id'];?>"><?php echo $value['menu_title'];?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>On Menu:</label>
                    <select class="form-control" name="on_menu">
                        <option value="">---On Menu---</option>
                        <option value="Yes">Yes</option>   
                        <option value="No">No</option>
                    </select>
                </div>
                
                     <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
