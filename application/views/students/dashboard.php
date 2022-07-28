<div class="row ml-2 mr-2  border border-danger rounded">
    <div class="col-1 text-center bg-danger pt-2">
        <h5 class="h5 text-light">Notice:</h5>
    </div>
    <div class="col-11 pt-2 text-success">
        <marquee behavior="" direction="">

            <?php
            foreach ($notice as $nkey => $nrow) {
            ?>
                <a href=""><b>| <?= $nrow->notice; ?> |</b></a>
            <?php

            }
            ?>
        </marquee>
    </div>
</div>
<br>


<section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-md btn-success border border-danger" data-toggle="modal" data-target="#fillAttendence">
        Fill Attendence
    </button>

    <!-- Modal -->
    <div class="modal fade" id="fillAttendence" tabindex="-1" role="dialog" aria-labelledby="fillAttendenceTitle" aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mark Attendance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <select class="form-control m-2" name="" id="lab">
                                <option value="">Select Lab</option>
                                <option value="Lab A1">Lab A1</option>
                                <option value="Lab B1">Lab B1</option>
                                <option value="Lab B2">Lab B2</option>
                            </select>
                            <h6 class="h6 ml-3">In Time</h6>
                            <input id="inTime" class="form-control m-2" type="time">
                        </div>
                        <div class="col">
                            <input id="system" class="form-control m-2" type="text" placeholder="System Number:">
                            <h6 class="h6 ml-3">Out Time</h6>
                            <input id="outTime" class="form-control m-2" type="time">
                        </div>
                    </div>
                    <!-- <input class="form-control m-2" type="text" placeholder="Purpose:"> -->
                    <p class="text-right">
                    <p class="text-right p-3">
                    <div class="row">
                        <div class="col-8 pt-2 text-center h6 text-info submitAttendanceMassage">


                        </div>
                        <div class="col-4">
                            <button class="submitattendancebtn btn btn-success btn-sm" onclick="submitAttendance();"> Submit</button>
                            <span class="pt-2 d-none sumbitAttensanceLoader"><i class="fa fa-spinner fa-pulse fa-fw"></i></span>
                        </div>
                    </div>
                    </p>

                    </p>


                </div>

            </div>
        </div>
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning border border-info btn-md" data-toggle="modal" data-target="#complaint">
        complaint
    </button>

    <!-- Modal -->
    <div class="modal fade" id="complaint" tabindex="-1" role="dialog" aria-labelledby="complaintTitle" aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <h2 class="h2">Raise System Complaint</h2>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <select class="form-control m-2 border border-success" id="labx">
                                <option value="">Select Lab</option>
                                <option value="Lab A1">Lab A1</option>
                                <option value="Lab B1">Lab B1</option>
                                <option value="Lab b2">Lab B2</option>
                            </select>
                        </div>
                        <div class="col">
                            <input id="systemx" class="form-control m-2 border border-success" type="text" placeholder="System Number:">
                        </div>
                    </div>
                    <input class="form-control m-2 border border-success" type="text" id="cType" placeholder="Complaint Type:">

                    <textarea class="form-control m-2 border border-success" id="descx" cols="30" rows="4">Description:</textarea>
                    <p class="text-right">
                    <div class="row">
                        <div class="col-8 pt-2 text-center h6 text-info submitComplaintMassage">


                        </div>
                        <div class="col-4">
                            <button class="submitcomplaintbtn btn btn-success btn-sm" onclick="submitComplaint();"> Submit</button>
                            <span class="pt-2 d-none sumbitComplaintLoader"><i class="fa fa-spinner fa-pulse fa-fw"></i></span>
                        </div>
                    </div>
                    </p>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</section>

<hr>
<div class="row">
    <div class="col-4" id="getAttendance">
    </div>
    <div class="col-8 " id="getComplaint">

    </div>
</div>