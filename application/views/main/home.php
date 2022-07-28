<!--BANNER-->
<div class="banner ">
	<section class="left_section ">
		<section class="">
		</section>
	</section>
	<section class="right-section">
		<span>
			<h1 class="title h1 text-warning">Allenhouse Computer Lab Info.</h1>
			<h4 class=" text-justify p-3">China National Complete Plant Import Export Corporation (Complant) is olved in contracting and engineering in the domestic and international markets. In a 2013 ranking compiled by Engineering tional revenue in 2012.</h4>
			<a href="<?= base_url();?>main/registratioForm" class="btn btn-success ">Get Start</a>
		</span>
	</section>
</div>
<br><br>
<section class="m-3 workBach">
	<div class="row">
		<div class="col-sm p-2 text-center">
			<img class="border border-warning rounded-circle" src="https://pgportal.gov.in/Images/iconHome/register.png">
			<button class="btn btn-sm btn-warning" onclick="attendanceWork();">Attendance</button>
		</div>
		<div class="col-sm p-2 text-center">
			<img class="border border-info rounded-circle" src="https://pgportal.gov.in/Images/iconHome/contact.png">
			<button class="btn btn-sm btn-info" onclick="complaintWork();">Complaint</button>
		</div>
		<div class="col-sm p-2 text-center">
			<img class="border border-success rounded-circle" src="https://pgportal.gov.in/Images/iconHome/status.png">
			<button class="btn btn-sm btn-success" onclick="searchWork();">Search</button>
		</div>
	</div>
</section>

<section class="attendanceWork d-none">
	<div class="row">
		<div class="col-9 text-center">
			<h2 class="h2"> Mark Attendance</h2>
			<hr>
			<div class="row">
				<div class="col ml-4">

					<input class="form-control border border-info m-2" id="sid" type="text" placeholder="Students Id:">
					<input class="form-control border border-info m-2" id="password" type="password" placeholder="Password">
					<div class="row">
						<div class="col">
							<select class="form-control m-2 border border-info" id="lab">
								<option value="">Select Lab</option>
								<option value="Lab A1">Lab A1</option>
								<option value="Lab B1">Lab B1</option>
								<option value="Lab b2">Lab B2</option>
							</select>
						</div>
						<div class="col">
							<input class="form-control border border-info m-2" id="system" type="text" placeholder="System Number">
						</div>
					</div>
					
				</div>
				<div class="col mr-4">
					<div class="row">
						<div class="col mt-2 h6">In Time:</div>
						<div class="col">
							<input class="form-control border border-info m-2" id="inTime" type="time" placeholder="">
						</div>
					</div>
					<div class="row">
						<div class="col mt-2 h6">Out Time:</div>
						<div class="col">
							<input class="form-control border border-info m-2" id="outTime" type="time" placeholder="">
						</div>
					</div>
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
				</div>
			</div>
		</div>
		<div class="col-3 border-left">
			<img class="border border-warning rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/register.png">
			<button class="btn btn-sm btn-warning" onclick="attendanceWork();">Attendance</button>
			<hr>
			<img class="border border-info rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/contact.png">
			<button class="btn btn-sm btn-info" onclick="complaintWork();">Complaint</button>
			<hr>
			<img class="border border-success rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/status.png">
			<button class="btn btn-sm btn-success" onclick="searchWork();">Search</button>
		</div>
	</div>
</section>
<section class="complaintWork d-none">
	<div class="row">
		<div class="col-9 text-center">
			<h2 class="h2">Raise System Complaint</h2>
			<hr>
			<div class="row">
				<div class="col ml-4">
					<input id="sidx" class="form-control m-2 border border-success" type="text" placeholder="Student Id:">
					<input id="passwordx" class="form-control m-2 border border-success" type="password" placeholder="Password:">
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
					
				</div>
				<div class="col mr-4">

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
		<div class="col-3 border-left">
			<img class="border border-warning rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/register.png">
			<button class="btn btn-sm btn-warning" onclick="attendanceWork();">Attendance</button>
			<hr>
			<img class="border border-info rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/contact.png">
			<button class="btn btn-sm btn-info" onclick="complaintWork();">Complaint</button>
			<hr>
			<img class="border border-success rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/status.png">
			<button class="btn btn-sm btn-success" onclick="searchWork();">Search</button>
		</div>
	</div>
</section>
<section class="searchWork d-none">
	<div class="row">
		<div class="col-9 text-center ">
			<h2 class="h2">Search.....</h2>
			<hr>
			<div class="row  ">
				<div class="col-8">
					<input class="form-control border-top border-warning" type="text" placeholder="Key For Search.....">
				</div>
				<div class="col-4 text-left">
					<button class="bnt btn-outline-warning rounded"><i class="fa fa-search p-2"></i></button>
				</div>
			</div>
		</div>
		<div class="col-3 border-left">
			<img class="border border-warning rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/register.png">
			<button class="btn btn-sm btn-warning" onclick="attendanceWork();">Attendance</button>
			<hr>
			<img class="border border-info rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/contact.png">
			<button class="btn btn-sm btn-info" onclick="complaintWork();">Complaint</button>
			<hr>
			<img class="border border-success rounded-circle" width="70" src="https://pgportal.gov.in/Images/iconHome/status.png">
			<button class="btn btn-sm btn-success" onclick="searchWork();">Search</button>
		</div>
	</div>
</section>

<br>
<br>
<section>
	<img class="img-fluid" src="https://pgportal.gov.in/Images/bannerHome/baner-cpgrams_3.jpg">
</section>