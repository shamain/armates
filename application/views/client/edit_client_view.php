<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Client Details</h3>
                </div>
                <form role="form" id="edit_client_form" name=edit_client_form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="client_fname">First Name</label>
                            <input id="client_fname" class="form-control" type="text" name="client_fname"  value="<?php echo $client->client_fname; ?>"style="width: 50%"> 
                        </div>

                          <div class="form-group">
                            <label for="client_lname">Last Name</label>
                            <input id="client_lname" class="form-control" type="text" name="client_lname"  value="<?php echo $client->client_lname; ?>"style="width: 50%"> 
                        </div>
                         <div class="form-group">
                            <label for="client_password">Password</label>
                            <input id="client_password" class="form-control" type="text" name="client_password"  value="<?php echo $client->client_password; ?>"style="width: 50%"> 
                        </div>

                         <div class="form-group">
                            <label for="client_email">Email</label>
                            <input id="client_email" class="form-control" type="text" name="client_email"  value="<?php echo $client->client_email; ?>"style="width: 50%"> 
                        </div>
                            <div class="form-group" >
                            <label for="client_bday">Birth Day</label>
                            <input id="client_bday_edit_dpicker" class="form-control"  type="text" input-append id="client_bday" name="client_bday" readonly="true"  value="<?php echo $client->client_bday; ?>"style="width: 50%">
                        </div>


                         <div class="form-group">
                            <label for="client_contact">Contact No</label>
                            <input id="client_contact" class="form-control" type="text" name="client_contact"  value="<?php echo $client->client_contact; ?>"style="width: 50%"> 
                        </div>

                            

                               <div class="form-group">
                                <label class="form-label">Avatar</label>
                                <span style="color: red">*</span>



                                <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
                                <script src="<?php echo base_url(); ?>application_resources/file_upload_plugin/ajaxupload.3.5.js" type="text/javascript"></script>
                                <script type="text/javascript">

                                        $(function() {
                                            var btnUpload = $('#upload');
                                            var status = $('#status');
                                            new AjaxUpload(btnUpload, {
                                                action: '<?PHP echo site_url(); ?>/client/client_controller/upload_client_image',
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

                                                        $('<div></div>').appendTo('#files').html('<img src="<?PHP echo base_url(); ?>uploads/clients/' + response + '" width="100px" height="100px"  /><br />');
                                                        picFileName = response;
                                                        document.getElementById('image').value = file;
                                                        document.getElementById('client_avatar').value = response;
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
                                            Upload Image Here
                                        </button>
                                        <input type="text" id="upload_client_image" name="upload_client_image" style="visibility: hidden" />
                                    </div>
                                    <div id="sta"><span id="status" ></span></div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="add_client_msg"> </div>
                        </div>


                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a href="<?php echo site_url(); ?>/client/client_controller/manage_clients" class="btn btn-white btn-cons" type="button">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('#client_parent_menu').addClass('active open');
    
</script>

