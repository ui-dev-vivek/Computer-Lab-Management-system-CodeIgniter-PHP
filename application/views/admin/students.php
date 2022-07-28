<a class="bnt btn-sm btn-info m-1" href="<?= base_url('Admin'); ?>">
    << Back</a>
        <section class="jumbotron">
            <p class="text-center">
            <h2>All Students.</h2>
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
                            <th scope="col">Name</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Year</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $akey => $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= ++$akey; ?></th>
                                <td><?= $row->sid; ?></td>
                                <td><?= $row->name; ?></td>
                                <td><?= $row->branch; ?></td>
                                <td><?= $row->year; ?></td>
                                <td><i class="fa fa-check-circle text-success" aria-hidden="true"></i></td>

                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
            </div>


        </section>