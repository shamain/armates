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
                    <h3 class="box-title">Insert client Details</h3>
                </div>
                <form role="form" id="add_client_form" name="add_client_form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="client_fname">First Name</label>
                            <input id="client_fname" class="form-control" type="text" name="client_fname"  style="width: 50%"> 
                        </div>
                        <div class="form-group">
                            <label for="client_lname">Last Name</label>
                            <input id="client_lname" class="form-control" type="text" name="client_lname"  style="width: 50%"> 
                        </div>
                         <div class="form-group">
                            <label for="client_password">Password</label>
                            <input id="client_password" class="form-control" type="text" name="client_password"  style="width: 50%"> 
                        </div>
                         <div class="form-group">
                            <label for="client_email">Email</label>
                            <input id="client_email" class="form-control" type="text" name="client_email"  style="width: 50%"> 
                        </div>
                         <div class="form-group">
                            <label for="client_contact">Contact No</label>
                            <input id="client_contact" class="form-control" type="text" name="client_contact"  style="width: 50%"> 
                        </div>
                       
                     


                 <div id="add_client_msg"> </div>


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