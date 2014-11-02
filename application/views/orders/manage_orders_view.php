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
                        <a href="<?php echo site_url(); ?>/orders/orders_controller/add_order_view">
                            <span class="btn btn-info">Add New Order</span>
                        </a>
                    </h3>
                </div><!-- /.box-header -->

                <div class="box-body table-responsive">

                    <table id="order_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Address</th>
                                <th>Sofa Model</th>
                                <th>Comments</th>
                                <th>Deliver Date</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($orders as $order) {
                                ?>
                                <tr id="order<?php echo $order->order_id; ?>">
                                    <td><?php echo $order->address; ?></td>
                                    <td>
                                       <?php echo $order->sofa_model;?>
                                    </td>
                                    <td><?php echo $order->comments; ?></td>
                                    <td>
                                        <?php echo $order->deliver_date; ?>
                                    </td>
                                    
                                    <td>
                                        <a href="<?php echo site_url(); ?>/orders/orders_controller/edit_order_view/<?php echo $order->order_id; ?>">
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


<div class="modal fade" id="add_order_modal" tabindex="-1" role="dialog" aria-labelledby="add_order_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_order_form" name="add_order_form">
                <div class="modal-header tiles green">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Order ID</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="order_id" class="form-control" type="text" name="order_id">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <textarea id="address" class="form-control" type="text" name="address"></textarea>                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Sofa Model</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <textarea id="sofa_model" class="form-control" type="text" name="sofa_model"></textarea>                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Comments</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <textarea id="comments" class="form-control" type="text" name="comments"></textarea>                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Deliver Date</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <textarea id="deliver_date" class="form-control" type="text" name="deliver_date"></textarea>                              
                            </div>
                        </div>
                    </div>


                </div>


                <div id="add_order_msg" class="form-row"> </div>
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
    $('#order_parent_menu').addClass('active open');
</script>

