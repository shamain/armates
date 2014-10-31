<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">

            <div class="grid-body ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form id="add_app_form" name="add_app_form">

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


                            <div id="edit_app_msg" class="form-row"> </div>
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
