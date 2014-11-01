<section class="content-header">
    <h1>
        <?php echo $heading; ?>
    </h1>
</section>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <button class="btn btn-info" data-toggle="modal" data-target="#add_package_modal">Add New Package</button>
                        
                    </h3>
                </div><!-- /.box-header -->

                <div class="box-body table-responsive">
                    <table id="package_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Package Name</th>
                                <th>Max Targets</th>
                                <th>Max Objects</th>
                                <th>Added Date</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($packages as $package) {
                                ?>
                                <tr id="pk<?php echo $package->package_id; ?>">
                                    <td><?php echo $package->package_name; ?></td>
                                    <td><?php echo $package->max_targets; ?></td>
                                    <td><?php echo $package->max_objects; ?></td>
                                    <td><?php echo $package->added_date; ?></td>
                                <td>         
                            <a href="<?php echo site_url(); ?>/package/package_controller/edit_package_view/<?php echo $package->package_id; ?>">
                                <span class="btn btn-info btn-sm">Edit</span>
                            
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

<div class="modal fade" id="add_package_modal" tabindex="-1" role="dialog" aria-labelledby="add_package_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_package_form" name="add_package_form">
                <div class="modal-header tiles green">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Package Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="package_name" class="form-control" type="text" name="package_name">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Max Targets</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="max_targets" class="form-control" type="text" name="max_targets">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Max Objects</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="max_objects" class="form-control" type="text" name="max_objects">                              
                            </div>
                        </div>
                    </div>
                    
                            
                                        <div id="sta"><span id="status" ></span></div>

                                    </div>
                                </div>
                            </div>


                </div>


                <div id="add_package_msg" class="form-row"> </div>
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