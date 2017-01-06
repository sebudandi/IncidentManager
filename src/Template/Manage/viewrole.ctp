<div class="column">
    <div class="col-md-3">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                </div><!-- /.widget-user-image -->
                <h3 class="widget-user-username">User Access Role</h3>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li><a href="#">Access Name:<span class="pull-right"><?php echo $role['access_name']; ?></span></a></li>
                    <li><a href="#">Access Denotor:<span class="pull-right"><?php echo $role['record_id']; ?></span></a></li>
                </ul>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li><a href="#">Allowed Access:<span class="pull-right">&nbsp;</span></a></li>
                    <li><a href="#">Access Denotor:<span class="pull-right"><?php echo $role['record_id']; ?></span></a></li>
                </ul>
            </div>
        </div><!-- /.widget-user -->
    </div><!-- /.col -->
</div>
