<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>PHP Login</title>
    
    <meta name="theme-color" content="#712cf9">
    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

  </head>
  <body class="text-bg-dark">
    
    <div class="d-flex justify-content-md-center align-items-center vh-100">
      <div>

      <form action="" method="POST">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="formEmail" name="formEmail" placeholder="Email" class="form-control" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="formPassword" name="formPassword" placeholder="Password" class="form-control" />
          </div>

          <!-- Submit button -->
          <div class="d-grid gap-2">
            <button type="submit" class="mt-2 btn btn-primary">Sign in</button>
          </div>
          
      </form>

      <?php
        $e = htmlspecialchars($_POST['formEmail']);
        $p = htmlspecialchars($_POST['formPassword']);

        echo "<p class=\"h2 gray-100\">$e</p>";
        echo "<p class=\"h2 gray-100\">$p</p>";
      ?>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>
