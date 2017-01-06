<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Functionality - Create Record</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <?php echo $this->Form->create(); ?>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Controller</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <?php foreach($ops as $key=>$value): ?>
                        <tr>
                            <td rowspan="<?php echo (count($value)+1);?>"><?php echo $key; ?></td>
                            <th>Select</th>
                            <th>Method</th>
                            <th>Menu Title</th>
                            <th>Load Page</th>
                            <th>On Menu</th>
                            <th>CSS</th>
                        </tr>
                        <?php foreach ($value as $rkey=>$rval): ?>
                        <tr>
                            <td><input type="checkbox" name="rval[]" value="<?php echo $rkey; ?>"/></td>
                            <td><?php echo $rval; ?></td>
                            <td><input type="text" name="menu_title[]" /></td>
                            <td><input type="text" name="load_page[]" value="<?php echo $key.'/'.$rval.'/'; ?>" readonly="readonly" /></td>
                            <td><input type="checkbox" name="on_menu[]" value="<?php echo $rkey; ?>" /></td>
                            <td><input type="text" name="css[]" /></td>
                        </tr>
                        <?php endforeach; endforeach; ?>
                        <tr>
                            <td colspan="6">&nbsp;</td>
                            <td><button type="submit" class="btn btn-info pull-right">Save</button></td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->