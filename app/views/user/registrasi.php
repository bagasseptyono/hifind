<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      <?php
      Flasher::Message();
      ?>
    </div>
  </div>
  <h3 class="text-center mb-4">Registrasi</h3>
  <form action="<?= BASEURL; ?>/User/regis" method="post">
    <div class="form-row row">
      <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="first_name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="last_name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputUsername">Username</label>
        <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
      </div>
      <div class="form-group col-md-4 ">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        <label for="inputConfirmPassword">Confirm Password</label>
        <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Password" name="confirmpassword">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Tanggal Lahir</label>
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
    </div>

    <button type="submit" class="btn btn-primary mt-2">Sign Up</button>
  </form>
</div>