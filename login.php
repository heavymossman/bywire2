
<?php include 'header.php';?>
<?php include 'nav.php';?>
<?php include 'logo-header.php';?>



<div class="container mt-5 ">

<div class="row">
  <div class="col-md 3"></div>
    <div class="col-md-6 p-5">


        <h2>Login <span class="not-registered"><small><em>Not registered yet? <a href="signup.php">Click here to create a FREE acount</a>.</em></small></span></h2>
    <hr />
    <div class="row">
  <div class="col-6">
    <button class="btn btn-social btn-facebook btn-block mb-1" href="#" role="button"><i class="fab fa-facebook-f mr-2"></i> <span class="hidden-mobile">Login with</span> Facebook</button></div>
    <div class="col-6">
    <button class="btn btn-social btn-google btn-block mb-1" href="#" role="button"><i class="fab fa-google mr-2"></i> <span class="hidden-mobile">Login with</span> Google</button></div>
    </div>
    <h5 class="mt-3">Or</h5>
<form>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me logged in on this device</label>
  </div>
  <button type="submit" class="btn btn-bywire">LOGIN</button>
</form>
</div>

<div class="col-md-3"></div>


</div>
</div>
            <!--MASTER container -->






<?php include 'footer.php';?>