<?php
if (!empty($result)) {
?>
    <div class="d-none" id="printArea">
        <?php
        foreach ($result as $akey => $row) {
        ?>
            <div class="text-justify border">
                <hr>
                <b>
                    <p>Student Id:<?= $row->sid; ?> | <?= $row->lab; ?> | System:<?= $row->system; ?> | <?php
                                                                                                        if ($row->status == 1) {
                                                                                                            echo "<b>( Panding! )</b>";
                                                                                                        } else {
                                                                                                            echo "<b>( Solved ).</b>";
                                                                                                        }
                                                                                                        ?> </p>
                </b>

                <h3>CID: <?= $row->id; ?> | Complaint Type: <?= $row->cType; ?></h3>
                <p class="text-justify">Description: <br>
                    <?= $row->descx; ?>
                </p>
                <hr>
            </div>
        <?php
        }
        ?>
    </div>

    <div class=" table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">SID</th>
                    <th scope="col">C-type</th>
                    <th scope="col">Lab</th>
                    <th scope="col">System</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $akey => $row) {
                ?>
                    <tr class="delConplainttrx<?= $row->id; ?>">
                        <th scope="row"><?= ++$akey; ?></th>
                        <td><?= $row->sid; ?></td>
                        <td><?= $row->cType; ?></td>
                        <td><?= $row->lab; ?></td>
                        <td><?= $row->system; ?></td>
                        <td>
                            <?php if ($row->status == 1) {
                            ?>
                                </i> <i class="solvedx<?= $row->id; ?> fa fa-check-circle text-dark" aria-hidden="true"> </i>
                            <?php
                            } else {
                            ?>
                                <i class="fa fa-check-circle text-success" aria-hidden="true"> </i>
                            <?php
                            }
                            ?>



                            <!-- Button trigger modal -->
                            <a href="javascript:void(0)" class="mr-2" data-toggle="modal" data-target="#exampleModalLong<?= $row->id; ?>">
                                <i class="fa fa-eye text-info ml-2" aria-hidden="true"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle<?= $row->id; ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle<?= $row->id; ?>"><?= $row->lab; ?> System No: <?= $row->system; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <b><?= $row->cType; ?></b>
                                            <hr>
                                            <?= $row->descx; ?>
                                            <br>
                                            <hr>
                                            <button class="bnt btn-sm btn-success text-center" onclick="complaintSolved('<?php echo $row->id; ?>','<?php echo base_url(); ?>');"> Solved. <span class="solveComplaintLoader<?= $row->id; ?> d-none"><i class="text-danger fa fa-spinner fa-pulse fa-fw"></i></span></button>
                                        </div>

                                    </div>
                                </div>
                            </div>

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
<?php
} else {
?>
    <h2 class="text-center">No Data Founde!</h2>
<?php
}
?>