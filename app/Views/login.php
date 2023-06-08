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

.alert{
  top: 20px;
  width: 20%;
  position: absolute;
  left: 50%;
  text-align: center;;
  transform: translateX(-50%);
}

</style>
<?php if ($alart) {
       echo '<div class="alert alert-success" role="alert">';
       echo $message;
       echo '</div>';
    }  ?> 

<main class="form-signin w-100 m-auto vh-100 text-align-center">
  <form class="h-100 d-flex flex-column justify-content-center" method="POST" action="login">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
      <input type="text" name="PersonID" class="form-control" id="floatingInput" placeholder="ID">
      <label for="floatingInput">ID</label>
    </div>
    <div class="form-floating">
      <input type="password" name="Password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="true" checked> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <a href="/register" class="mt-2">Create account</a>
  </form>
</main>