<div class="row">
        <?php echo $this->Form->create(); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Person</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                    <!-- text input -->
                    <div class="form-group">
                            <?php echo $this->Form->input('fname', array('label'=>'First Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('mname', array('label'=>'Other Names:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('lname', array('label'=>'Last Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('passportNo', array('label'=>'Passport Number:', 'class'=>'form-control')); ?>
                    </div> 
                    <div class="form-group">
                            <?php echo $this->Form->input('dob', array('label'=>'Date of birth:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="form-group">
                            <?php echo $this->Form->input('pob', array('label'=>'Place of birth:', 'class'=>'form-control')); ?>
                    </div>    
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Additional Details:</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Gender:</label>
                        <select class="form-control" name="gender">
                            <option value="">---Gender---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('photo', array('label'=>'Photo:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <label>Nationality:</label>
                        <select class="form-control" name="nationality">
                            <option value="">---Nationality---</option>
                            <?php foreach ($nations as $key => $value): ?>
                            <option value="<?php echo $value['iso_code'];?>"><?php echo $value['country_name'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Marital Status:</label>
                        <select class="form-control" name="maritialStatus">
                            <option value="">---Marital Status---</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div> 
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
