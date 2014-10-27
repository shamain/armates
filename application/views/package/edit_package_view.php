<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            
            <div class="grid-body ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form id="edit_package_form" name="edit_package_form">

                            <div class="form-group">
                                <label class="form-label">Package Name</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="package_name" class="form-control" type="text" name="package_name" value="<?php echo $package->package_name; ?>" style="width: 50%" >                              
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Max Targets</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="max_targets" class="form-control" type="text" name="max_targets" value="<?php echo $package->max_targets; ?>" style="width: 50%">                              
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Max Objects</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="max_objects" class="form-control" type="text" name="max_objects" value="<?php echo $package->max_objects; ?>" style="width: 50%">                              
                                </div>
                            </div>



                            

                            


                            <div id="edit_package_msg" class="form-row"> </div>

                            <input type="hidden" id="package_id" name="package_id" value="<?php echo $package->package_id; ?>"/>
                            <div class="modal-footer">

                                <button class="btn btn-primary btn-cons" type="submit">
                                    <i class="icon-ok"></i>
                                    Save
                                </button>
                                <a href="<?php echo site_url(); ?>/package/package_controller/manage_packages" class="btn btn-white btn-cons" type="button">Cancel</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#package_parent_menu').addClass('active open');
    
</script>


