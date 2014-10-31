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

                <div class="box-body table-responsive">
                    <script src="<?php echo base_url(); ?>application_resources/js/jquery-1.8.3.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url(); ?>application_resources/file_upload_plugin/ajaxupload.3.5.js" type="text/javascript"></script>
                    <script type="text/javascript">

                        $(function() {
                            var btnUpload = $('#upload');
                            var status = $('#status');
                            new AjaxUpload(btnUpload, {
                                action: '<?PHP echo site_url(); ?>/app/app_controller/upload_object_image',
                                name: 'uploadfile',
                                onSubmit: function(file, ext) {
                                    if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                        // extension is not allowed 
                                        status.text('Only JPG, PNG or GIF files are allowed');
                                        return false;
                                    }
                                    //status.text('Uploading...Please wait');
                                    $("#files").html("<i id='animate-icon' class='fa fa-spinner fa fa-2x fa-spin'></i>");

                                },
                                onComplete: function(file, response) {
                                    //On completion clear the status
                                    //status.text('');
                                    $("#files").html("");
                                    $("#sta").html("");
                                    //Add uploaded file to list
                                    if (response != "error") {

                                        $('#files').html("");
                                        $('<div></div>').appendTo('#files').html('<img src="<?PHP echo base_url(); ?>uploads/objects/' + response + '" width="100px" height="68px" /><br />');
                                        picFileName = response;
                                        document.getElementById('project_logo').value = response;
                                    } else {
                                        $('<div></div>').appendTo('#files').text(file).addClass('error');
                                    }
                                }
                            });

                        });

                    </script>

                    <div class="row form-row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <div id="files" class="project-logo">
                                    <img src="<?php echo base_url(); ?>uploads/project_logo/project_default_logo.png" width="100px" height="68px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" right">                                       
                                <i class=""></i>

                                <div id="upload">
                                    <button class="btn btn-default btn-sm btn-small" type="button" id="browse">
                                        Upload Object
                                    </button>
                                    <input type="text" id="project_logo" name="project_logo" style="visibility: hidden" value="project_default_logo.png"/>
                                </div>
                                <div id="sta"><span id="status" ></span></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table id="my_object_table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Object Name</th>
                    <th>Format</th>
                    <th>Added Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($objects as $object) {
                    ?>
                    <tr id="ob<?php echo $object->object_id; ?>">
                        <td><?php echo $object->object_name; ?></td>
                        <td><?php echo $object->format; ?></td>
                        <td><?php echo $object->added_date; ?></td>
                        <td>

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




<script type="text/javascript">
    $('#app_parent_menu').addClass('active open');
</script>
