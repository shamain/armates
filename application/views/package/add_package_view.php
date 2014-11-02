<section class="content-header">
    <h1>
        <?php echo $heading; ?>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Insert Package Details</h3>
                </div>
                <form role="form" id="add_package_form" name="add_package_form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="package_name">Package Name</label>
                            <input id="package_name" class="form-control" type="text" name="package_name"  style="width: 50%"> 
                        </div>

                        <div class="form-group">
                            <label for="max_targets">Max Targets</label>
                            <textarea id="max_targets" class="form-control" type="text" name="max_targets"  style="width: 50%"> 
                            </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="max_objects">Max Objects</label>
                            <textarea id="max_objects" class="form-control" type="text" name="max_objects"  style="width: 50%"> 
                            </textarea>
                        </div>

                        
                        

                        <div class="form-group">
                            <div id="add_package_msg"> </div>
                        </div>


                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a href="<?php echo site_url(); ?>/package/package_controller/manage_packages" class="btn btn-white btn-cons" type="button">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    $('#package_parent_menu').addClass('active open');
</script>
