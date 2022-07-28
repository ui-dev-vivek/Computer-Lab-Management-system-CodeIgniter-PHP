<section class="jumbotron">
    <h3 class="h3 text-center">Complaint List:</h3>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">Date:</th>
                    <th scope="col">CID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($getComplaint as $ckey => $row) {
                ?>
                    <tr class="delComplaintTr<?= $row->id; ?>">
                        <th scope="row"><?= ++$ckey; ?></th>
                        <td><?= $row->dateTime; ?></td>
                        <td><?= $row->id; ?></td>
                        <td><?= $row->cType; ?></td>
                        <td>
                            <?php if ($row->status == 1) {
                            ?>
                                <i class="fa fa-exclamation-circle text-warning" aria-hidden="true"> </i> <i class="fa fa-check-circle text-light" aria-hidden="true"> </i>
                            <?php
                            } else {
                            ?>
                                <i class="fa fa-exclamation-circle text-light" aria-hidden="true"> </i> <i class="fa fa-check-circle text-success" aria-hidden="true"> </i>
                            <?php
                            }
                            ?>
                        </td>
                        <td>
                            <a href="javascript:void(0);"></i>
                                <span class="delConplaintBtn<?= $row->id; ?>"> <i class="fa fa-trash text-danger" onclick="delComplaint('<?php echo $row->id; ?>','<?php echo base_url(); ?>');"></i></span>
                                <span class="delComplaintLoader<?= $row->id; ?> d-none"><i class="text-danger fa fa-spinner fa-pulse fa-fw"></i></span></a>

                        </td>
                    </tr>



                <?php

                }
                ?>
            </tbody>
        </table>
    </div>
</section>