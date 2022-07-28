<a class="bnt btn-sm btn-info m-1" href="<?= base_url(); ?>Technician">
    << Back</a>
        <section class="jumbotron">
            <div class="row">
                <div class="col">
                    <label for="sid">Student Id:</label>
                    <input class="form-control" id="sid" type="text" value="All">
                </div>
                <div class="col">
                    <label for="sid">Lab:</label>
                    <select class="form-control" id="lab">
                        <option value="">All Lab</option>
                        <option value="Lab A1">Lab A1</option>
                        <option value="Lab B1">Lab B1</option>
                        <option value="Lab B2">Lab B2</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Status</label>
                    <select class="form-control" id="status">
                        <option value="">All</option>
                        <option value="1">Panding</option>
                        <option value="2">Solved</option>
                    </select>
                </div>

                <div class="col">
                    <label for="">Date:</label>
                    <input class="form-control" id="byDate" type="datetime-local">
                </div>
                <div class="col-2" style="padding-top:35px;">
                    <button class="btn-sm btn-outline-warning" onclick="getComplaint('<?= base_url(); ?>')">Find</button>
                </div>
            </div>
            <hr>
            <div class="text-right">
                <button class="btn btn-sm btn-warning" onclick="printDiv('printArea')">Print <i class="fa fa-print" aria-hidden="true"></i></button>
            </div>

            <div class="getComplaint">

            </div>
        </section>