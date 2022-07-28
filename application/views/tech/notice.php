<a class="bnt btn-sm btn-info m-1" href="<?= base_url(); ?>Technician">
    << Back</a>
        <section class="jumbotron">
            <p class="text-center">
            <h2>All Notice.</h2>
            </p>
            <div class="text-right">
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    + Add Notice
                </button><button class="btn btn-sm btn-warning" onclick="printDiv('printArea')">Print <i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
            <div class="table-responsive" id="printArea">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">Notice</th>
                            <th scope="col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $akey => $row) {
                        ?>
                            <tr class="delNoticetrx<?= $row->id; ?>">
                                <th scope="row"><?= ++$akey; ?></th>
                                <td><?= $row->notice; ?></td>
                                <td><a href="javascript:void(0);"></i>
                                        <span class="delNoticeBtn<?= $row->id; ?>"> <i class="fa fa-trash text-danger" onclick="delNotice('<?php echo $row->id; ?>','<?php echo base_url(); ?>');"></i></span>
                                        <span class="delNoticeLoader<?= $row->id; ?> d-none"><i class="text-danger fa fa-spinner fa-pulse fa-fw"></i></span></a>
                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
            </div>


        </section>




        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h5" id="exampleModalLongTitle">Add Notice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(); ?>Technician/addNotice" method="post">
                            <h6>Notice:</h6>
                            <textarea class="form-control border border-info m-2" name="notice" cols="30" rows="10"></textarea>
                            <input type="submit" class="btn btn-sm btn-success" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>