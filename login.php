<!doctype html>
<html lang = "en">
  <body>
    <header>
      <div class="headercontainer flex-item">
        <div id="mobile_view_header">
          <button id="nav-button">&#9776;</button>
            <h1><img id="logo" src="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" alt="Impossible Octopus Fitness Club Logo"> <span class="visuallyhidden">Impossible Octopus Fitness</span> </h1>
        </div>
        <nav>
          <ul class="centernav flex-item">
            <li><a href="index.php">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <div class="outercontainer flex-item">
      <div class="login_form">
        <h1>Log in to Impossible Octopus Fitness</h1>
        <form method="post" name"loginform" action="index.php">
          <p>
            <label for="name">Login:</label><br>
            <input type="text" name="name">
          </p>
          <p>
            <label for="password">Password:</label><br>
            <input type = "password" class = "form-control" name = "password" placeholder = "******">
          </p>
          <input class="button" id="submit_button" type="submit" value="Submit">
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
