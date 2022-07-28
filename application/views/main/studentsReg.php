<section class="" style="background-image: url(https://www.udc.edu/cal/wp-content/uploads/sites/13/2021/10/Computer-Lab-Background.png);"><br>
	<div class="row">
		<div class="col-sm"></div>
		<div class="col-sm text-center jumbotron  regSuccess logox">
			<h2> Students Registration</h2>
			<hr>
			<form id="studentsReg">
				<input class="form-control m-2 border border-info" id="name" type="text" placeholder="Full Name:" required>
				<input class="form-control m-2 border border-info" id="cid" type="text" placeholder="College Id:" required>
				<div class="row">
					<div class="col">
						<select id="branch" class="form-control m-2 border border-info">
							<option>Select Branch</option>
							<option value="EC">EC</option>
							<option value="CS">CS</option>
							<option value="ML">ML</option>
							<option value="CE">CE</option>
						</select>
					</div>
					<div class="col">
						<select id="year" class="form-control m-2 border border-info">
							<option>Select Year</option>
							<option value="1">1st</option>
							<option value="2">2nd</option>
							<option value="3">3rd</option>
							<option value="4">4th</option>
						</select>
					</div>
				</div>
				<input class="form-control m-2 border border-info" id="email" type="text" placeholder="Email:" required>
				<input class="form-control m-2 border border-info" id="pass" type="password" placeholder="Password" required>
				<input class="form-control m-2 border border-info" id="rpass" type="password" placeholder="Re-Password:" required>
			</form>
			<span class="text-danger h6" id="studentsRegMassage"></span>
			<p>
				<button class="btn btn-sm btn-success" onclick="studentsRegistration();"><span class="d-none stuRegLoader"><i class="fa fa-spinner fa-pulse fa-fw"></i></span><span class="stuRegBtn"> Submit</span></button>

			</p>
			<hr>
			<p>Already Register ? <a href="<?= base_url(); ?>Auth/studentsLogin">Login hear.</a></p>
		</div>
		<div class="col-sm"></div>
	</div>
</section>