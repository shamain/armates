<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">

            <div class="grid-body ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form id="edit_client_form" name="edit_app_form">

                            <div class="form-group">
                                <label class="form-label">App Name</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="app_name" class="form-control" type="text" name="app_name"  style="width: 50%">                              
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">App Description</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <textarea id="app_description" class="form-control" type="text" name="app_description"  style="width: 50%">
                                    </textarea>                              
                                </div>
                            </div>

                            <div id="edit_app_msg" class="form-row"> </div>

                            <input type="hidden" id="app_id" name="app_id" value="<?php echo $app->app_id; ?>"/>
                            <div class="modal-footer">

                                <button class="btn btn-primary btn-cons" type="submit">
                                    <i class="icon-ok"></i>
                                    Save
                                </button>
                                <a href="<?php echo site_url(); ?>/app/app_controller/manage_apps" class="btn btn-white btn-cons" type="button">Cancel</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#app_parent_menu').addClass('active open');

</script>
