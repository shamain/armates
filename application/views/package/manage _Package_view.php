<!--<section class="content-header">
    <h1>
        My Apps
        <small>Preview of UI elements</small>
    </h1>
</section>-->

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Packages Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="package_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Package Name</th>
                                <th>Added Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($packages as $package) {
                                ?>
                                <tr>
                                    <td><?php echo $package->package_name; ?></td>
                                    <td><?php echo $package->added_date; ?></td>

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