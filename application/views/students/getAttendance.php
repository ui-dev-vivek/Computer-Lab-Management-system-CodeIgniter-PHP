<section class="jumbotron">
    <h3 class="h3 text-center">Today Attendence</h3>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">InTime</th>
                    <th scope="col">Out Time</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($getAttendance as $akey => $row) {
                ?>
                    <tr>
                        <th scope="row"><?= ++$akey; ?></th>
                        <td><?= $row->inTime; ?></td>
                        <td><?= $row->outTime; ?></td>
                        <td><i class="fa fa-check-circle text-success" aria-hidden="true"></i></td>

                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
    </div>
</section>