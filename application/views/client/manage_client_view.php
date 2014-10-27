<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Clients Details</h3>
                </div><!-- /.box-header -->
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
                                    <td><?php echo $client->client_name; ?></td>
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
<script type="text/javascript">
    $('#app_parent_menu').addClass('active open');
</script>