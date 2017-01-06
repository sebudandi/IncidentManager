<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Operations</h3>
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
                            <th>Menu Title</th>
                            <th>Load Page URL</th>
                            <th>Parent Option</th>
                            <th>On Menu</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($opslist as $key=>$value): ?>
                        <tr>
                            <td><?php echo $value['menu_title']; ?></td>
                            <td><?php echo $value['load_page']; ?></td>
                            <td><?php echo $value['Parent']['menu_title']; ?></td>
                            <td><?php echo $value['on_menu']; ?></td>
                            <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'manage', 'action' => 'editop', $value['id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'manage', 'action' => 'viewop', $value['id']), 
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