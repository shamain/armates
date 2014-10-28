<section class="content-header">
    <h1>
        <?php  echo  $heading;?>
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
