<a class="bnt btn-sm btn-info m-1" href="<?= base_url("Admin"); ?>">
    << Back</a>
        <section class="jumbotron">
            <p class="text-center">
            <h2>All Technician.</h2>
            </p>
            <div class="text-right">
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    + Add Technician
                </button><button class="btn btn-sm btn-warning" onclick="printDiv('printArea')">Print <i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
            <div class="table-responsive" id="printArea">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">Name:</th>
                            <th scope="col">Email:</th>
                            <th scope="col">Department:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $akey => $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= ++$akey; ?></th>
                                <td><?= $row->name; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->department; ?></td>

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
                        <h5 class="modal-title h5" id="exampleModalLongTitle">Add Technician</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Admin/addTechnician'); ?>" method="post">
                            <input type="text" name="name" class="form-control m-2" placeholder="Name:" required>
                            <input type="email" name="email" class="form-control m-2" placeholder="Emial Id:" required>
                            <input type="text" name="department" class="form-control m-2" placeholder="Department:" required>
                            <input type="text" name="password" class="form-control m-2" placeholder="Password:" required>
                            <input type="submit" class="btn btn-sm btn-success" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>