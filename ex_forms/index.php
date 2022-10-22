<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PHP Forms</title>
</head>
<body class="has-background-grey-dark">

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">

          <form action="" name="fullname" method="GET" class="box">
            <div class="field">
              <label for="" class="label">First Name</label>
              <div class="control has-icons-left">
                <input type="text" name="userFirst" class="input" required>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Last Name</label>
              <div class="control has-icons-left">
                <input type="text" name="userLast" class="input" required>
              </div>
            </div>
            <div class="field">
              <button type="submit" name="submit" value="submit" class="button is-info">
                Greet
              </button>
            </div>
          </form>

          <?php

            if (isset($_GET["submit"])) {
                
              $userFirst = htmlspecialchars($_GET['userFirst']);
              $userLast = htmlspecialchars($_GET['userLast']);
              $userFull = strtoupper($userFirst . " " . $userLast);
              
              echo "<article class=\"message is-info\">
                <div class=\"message-header\">
                  <p>Info</p>
                  <button class=\"delete\" aria-label=\"delete\"></button>
                </div>
                <div class=\"message-body\">
                  $userFull
                </div>
              </article>";

            }
            
          ?>

        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>