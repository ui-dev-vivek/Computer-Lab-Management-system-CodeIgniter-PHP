<a class="bnt btn-sm btn-info m-1" href="<?= base_url(); ?>Technician">
    << Back</a>
        <section class="jumbotron">
            <p class="text-center">
            <h2>Today Attendance</h2>
            </p>
            <div class="text-right">
                <button class="btn btn-sm btn-warning" onclick="printDiv('printArea')">Print <i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
            <div class="table-responsive" id="printArea">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">SID</th>
                            <th scope="col">Lab</th>
                            <th scope="col">system</th>
                            <th scope="col">Time</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $akey => $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= ++$akey; ?></th>
                                <td><?= $row->sid; ?></td>
                                <td><?= $row->lab; ?></td>
                                <td><?= $row->system; ?></td>
                                <td><?= $row->inTime; ?> - <?= $row->outTime; ?></td>
                                <td><i class="fa fa-check-circle text-success" aria-hidden="true"></i></td>

                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
            </div>


        </section>