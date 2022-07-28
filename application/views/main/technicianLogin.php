<section class="" style="background-image: url(https://www.udc.edu/cal/wp-content/uploads/sites/13/2021/10/Computer-Lab-Background.png);"><br>
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm text-center jumbotron  techLoginSuccess logox">
            <h2 class="h2"> Technician Login</h2>
            <hr>
            <small>Id: <b>tech@demo.com</b> </small>
            <small>& Password: <b>demo</b></small>
            <form id="techLogin">
                <input id="email" class="form-control border border-info m-2" type="text" placeholder="Email Id:">
                <input id="password" class="form-control border border-info m-2" type="password" placeholder="Password">

            </form>
            <span class="text-danger h6" id="techLoginMassage"></span>
            <p>
                <button class="btn btn-success" onclick="techLogin();"><span class="d-none techLoginLoader"><i class="fa fa-spinner fa-pulse fa-fw"></i></span><span class="techLoginBtn">Login</span></button>

            </p>
            <hr>

        </div>
        <div class="col-sm"></div>
    </div>
</section>