<section class="" style="background-image: url(https://www.udc.edu/cal/wp-content/uploads/sites/13/2021/10/Computer-Lab-Background.png);"><br>
	<div class="row">
		<div class="col-sm"></div>
		<div class="col-sm text-center jumbotron  loginSuccess logox">
			<h2 class="h2"> Students Login</h2>
			<hr>
			<form id="studentsLogin">
				<input id="sid" class="form-control border border-info m-2" type="text" placeholder="Student Id:">
				<input id="password" class="form-control border border-info m-2" type="password" placeholder="Password">

			</form>
			<span class="text-danger h6" id="studentsloginMassage"></span>
			<p>
				<button class="btn btn-sm btn-success" onclick="studentsLogin();"><span class="d-none stuLoginLoader"><i class="fa fa-spinner fa-pulse fa-fw"></i></span><span class="stuLoginBtn">Login</span></button>

			</p>
			<hr>
			<p>Not A member ? <a href="<?= base_url(); ?>main/registratioForm">Register Now.</a></p>
		</div>
		<div class="col-sm"></div>
	</div>
</section>