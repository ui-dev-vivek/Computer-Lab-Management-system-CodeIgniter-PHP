<nav class="mb-1 navbar navbar-expand-lg tempting-azure-gradient navbar-light border fixed-top">
  <a class="navbar-brand" href="#">
    <h6 class="h4">&nbsp;&nbsp;<i class="fa fa-laptop" aria-hidden="true"></i>
      Lab Info</h6>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

      <!-- <li class="nav-item h6">
        <a class="nav-link" href="#">
          <i class="fa fa-list-alt" aria-hidden="true"> </i> Lab Attendance</a>
      </li> -->
      <li class="nav-item h6">
        <a class="nav-link" href="<?= base_url() ?>">
          Home</a>
      </li>
      <li class="nav-item h6">
        <a class="nav-link" href="<?= base_url('Main/About') ?>">
          About</a>
      </li>
      <li class="nav-item h6">
        <a class="nav-link" href="https://gauranshika.com">
          @dev.me</a>
      </li>
      <li class="nav-item dropdown h6">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Login </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info h6" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="<?= base_url() . 'Auth/studentsLogin'; ?>">Students Login</a>
          <a class="dropdown-item" href="<?= base_url() . 'Auth/technicianLogin'; ?>">Technician Login</a>
          <hr>
          <a class="dropdown-item" href="<?= base_url() . 'Auth/adminLogin'; ?>">Admin Login</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br><br>