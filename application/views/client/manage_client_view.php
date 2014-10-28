<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Clients Details</h3>
                </div><!-- /.box-header -->
                <button class="btn btn-info" data-toggle="modal" data-target="#add_client_modal">Add New client</button>
                <div class="box-body table-responsive">
                    <table id="client_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Image</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($clients as $client) {
                                ?>
                                <tr>
                                     <tr  id="client_<?php echo $client->client_id; ?>">


                                    <td><?php echo $client->client_fname . ' ' . $client->client_lname; ?></td>
                                   
                                    <td><?php echo $client->client_email; ?></td>
                                    <td><?php echo $client->client_contact; ?></td>
                                    <td><?php echo $client->client_avatar; ?></td>

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
<div class="modal fade" id="add_client_modal" tabindex="-1" role="dialog" aria-labelledby="add_client_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_client_form" name="add_client_form">
                <div class="modal-header tiles green">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">

                     <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="client_fname" class="form-control" type="text" name="client_fname">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="client_lname" class="form-control" type="text" name="client_lname">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <i class="">
                                <div class="form-group">                               
                                    <label class="form-label">Password</label>
                                    <span style="color: red">*</span>                             
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                           
                                <i class=""></i>
                                 <input id="client_password" class="form-control" type="text" name="client_password">  

                            </div>
                        </div>

                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="client_email" class="form-control" type="text" name="client_email">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Contact No</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="client_contact" class="form-control" type="text" name="client_contact">                              
                            </div>
                        </div>
                    </div>
                </div>


                <div id="add_client_contact_msg" class="form-row"> </div>
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