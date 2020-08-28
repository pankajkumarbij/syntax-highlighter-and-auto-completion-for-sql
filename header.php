<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHAC</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <style>
      .nav-class
      {
          padding: 2%;
      }
      .nav-class:hover
        {
            background-color: white;
            border-radius: 10px;
        }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php" style="color: yellow;float: rigth;"><h4>SHAC for SQL</h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item nav-class">
                <a class="nav-link" style="color:orange;" href="index.php">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
            <?php
            session_start();
            if($_SESSION['un'])
            {
                ?>
                <li class="nav-item active">
                    <a class="nav-link" style="color: lightblue;" href="#">Now you are connected with database</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: lightgreen;"><i class="fa fa-user"></i> <?php echo $_SESSION['un']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database_disconnect.php"><button class="btn  btn-outline-warning"><i class="fa fa-sign-in"></i> Disconnect from database</button></a>
                </li>
                <?php
            }
            else
            {
                ?>
                <li class="nav-item active">
                    <a class="nav-link" style="color: lightblue;" href="#">You are not connected with database</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database_connection.php"><button class="btn  btn-outline-warning"> <i class="fa fa-sign-in"></i> Connect with database</button></a>
                </li>
                <?php
            }
            ?>
        </ul>
        </form>
    </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>