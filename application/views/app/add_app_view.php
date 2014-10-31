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
                    <h3 class="box-title">Insert App Details</h3>
                </div>
                <form role="form" id="add_app_form" name="add_app_form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="app_name">App Name</label>
                            <input id="app_name" class="form-control" type="text" name="app_name"  style="width: 50%"> 
                        </div>

                        <div class="form-group">
                            <label for="app_description">App Name</label>
                            <textarea id="app_description" class="form-control" type="text" name="app_description"  style="width: 50%"> 
                            </textarea>
                        </div>

                        <script src="<?php echo base_url(); ?>application_resources/js/jquery-1.8.3.min.js" type="text/javascript"></script>
                        <script src="<?php echo base_url(); ?>application_resources/file_upload_plugin/ajaxupload.3.5.js" type="text/javascript"></script>
                        <script type="text/javascript">

                            $(function() {
                                var btnUpload = $('#upload');
                                var status = $('#status');
                                new AjaxUpload(btnUpload, {
                                    action: '<?PHP echo site_url(); ?>/app/app_controller/upload_app_scenes',
                                    name: 'uploadfile',
                                    onSubmit: function(file, ext) {
                                        if (!(ext && /^(pdf|unity3d)$/.test(ext))) {
                                            // extension is not allowed 
                                            status.text('Only Unity3D files are allowed');
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
                                            $('<div></div>').appendTo('#files').html('File Uploaded Successfully ..');
                                            picFileName = response;
                                            document.getElementById('app_scene_file').value = response;
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" right">                                       
                                    <i class=""></i>

                                    <div id="upload">
                                        <button class="btn btn-default btn-sm btn-small" type="button" id="browse">
                                            Upload Scene File
                                        </button>
                                        <input type="text" id="app_scene_file" name="app_scene_file" style="visibility: hidden" />
                                    </div>
                                    <div id="sta"><span id="status" ></span></div>

                                </div>
                            </div>
                        </div>

                        <div id="add_app_msg"> </div>


                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a href="<?php echo site_url(); ?>/app/app_controller/manage_apps" class="btn btn-white btn-cons" type="button">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    $('#app_parent_menu').addClass('active open');
</script>