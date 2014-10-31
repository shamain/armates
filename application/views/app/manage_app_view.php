<section class="content-header">
    <h1>
        <?php echo $heading; ?>
        <small>Preview of UI elements</small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <a href="<?php echo site_url(); ?>/app/app_controller/add_app_view">
                    <span class="btn btn-info">Add New App</span>
                </a>
                <div class="box-body table-responsive">

                    <table id="app_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>App Name</th>
                                <th>Description</th>
                                <th>Added Date</th>
                                <th>Actions</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($apps as $app) {
                                ?>
                                <tr id="app<?php echo $app->app_id; ?>">
                                    <td><?php echo $app->app_name; ?></td>
                                    <td><?php echo $app->app_description; ?></td>
                                    <td><?php echo $app->added_date; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>/app/app_controller/upload_object_view/<?php echo $app->app_id; ?>">
                                            <span class="btn btn-success btn-sm">Upload Objects</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>/app/app_controller/edit_app_view/<?php echo $app->app_id; ?>">
                                            <span class="label label-info">Edit</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->


<div class="modal fade" id="add_app_modal" tabindex="-1" role="dialog" aria-labelledby="add_app_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_app_form" name="add_app_form">
                <div class="modal-header tiles green">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">App Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="app_name" class="form-control" type="text" name="app_name">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <textarea id="app_description" class="form-control" type="text" name="app_description"></textarea>                              
                            </div>
                        </div>
                    </div>


                </div>


                <div id="add_app_msg" class="form-row"> </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
    $('#app_parent_menu').addClass('active open');
</script>
