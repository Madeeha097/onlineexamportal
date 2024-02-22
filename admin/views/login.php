<html>
    <head>
        <title> My Admin Panel </title>

        <link rel="stylesheet" href="../assets/css/custom.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    
    </head>
<!-- Content -->
<div class="container mt-4">
  <!-- Login Page -->
  <div id="loginPage" class="page">
    <h2>Admin Login</h2>
    <form style="width: 400px; margin: 0 auto;" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
      </div>
        <div class="form-group">
          <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
      </div>

      <div class="form-group">
        <input type="checkbox" id="remember" required>
          <label for="checkbox">Remember Me</label>
      </div>
      <button type="button" id="btnlogin" class="btn btn-primary">Login</button>
  </form>
  </div>

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="../assets/js/custom.js"></script>

</body>
</html>
