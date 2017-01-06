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
                <?php echo $this->Form->create(); ?>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Controller</th>
                            <th>Methods</th>
                            <th>Manage</th>

                        </tr>
                        <?php foreach($resources as $key=>$value): foreach ($value as $maker => $resource):?>
                        <tr>
                            <td><?php echo $maker; ?></td>
                            <td>
                                <?php 
                                $x=0;
                                foreach ($resource as $rkey => $rvalue): 
                                    echo $rvalue.', ';
                                    $x++;
                                    if($x%5==0) echo '<br/>';
                                endforeach; ?>
                            </td>
                            <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'manage', 'action' => 'createops', $maker), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'manage', 'action' => 'viewgrp', $maker), 
    array('escape' => false)); ?>
                            </td>
                            
                        </tr>
                        
                        <?php endforeach; endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->