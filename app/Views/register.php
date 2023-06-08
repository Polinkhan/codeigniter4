<style>
body {
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

<div class="container vh-100">
  <main class="h-100 d-flex justify-content-center align-items-center">
      <div class="w-50">
        <h4 class="mb-3 align-middle">Credentials & Information</h4>
        <form class="needs-validation" method="POST" action="register/<?=$dynamic_id ?>">
          <div class="row g-3">

            <div class="col-12">
              <label for="username" class="form-label">Person ID</label>
              <div class="input-group has-validation">
              <input type="text" value=<?= $dynamic_id ?> class="form-control" id="id" placeholder="ID" disabled>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" name="Email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Password<span class="text-danger"> * </span></label>
              <input type="text" name="Password" class="form-control" id="password" placeholder="Password" required autocomplete="off">
            </div>

            <hr class="mt-5">

            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name <span class="text-danger"> * </span></label>
              <input type="text" name="FirstName" class="form-control" id="firstName" placeholder="" value="" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name<span class="text-danger"> * </span></label>
              <input type="text" name="LastName" class="form-control" id="lastName" placeholder="" value="" required>
            </div>


            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" name="Address" class="form-control" id="address" placeholder="1234 Main St">

            </div>

            <div class="col-6">
              <label for="state" class="form-label">City</label>
              <select class="form-select" name="City" id="city" required>
                <?php
                      $citys = array("Dhaka","Chattogram","Rajshahi","Khulna","Sylhet");
                      foreach($citys as $city){
                        echo '<option value='.$city.'>'.$city.'</option>';
                      }
                ?>
              </select>
            </div>

            <div class="col-6">
              <label for="state" class="form-label">Account Type<span class="text-danger"> * </span></label>
              <select class="form-select" name="Account" id="account" required>
                <?php
                      $accounts = array("User","Admin");
                      foreach($accounts as $account){
                        echo '<option value='.$account.'>'.$account.'</option>';
                      }
                ?>
              </select>
            </div>

          <hr class="mt-5">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Register Now</button>
        </form>
      </div>
  </main>
</div>