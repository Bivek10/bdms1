<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
     .navbar {
    background-color: #D00D0D  ;
    padding: 10px 20px;
    opacity: 0.9;
    color:#D8CACA  ;

  }

  .navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
  }
  .navbar-brand {
    font-size: 25px;
    font-weight: bold;

  }
  .navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar-right {
    float: none;
  }
   #qq:hover{
    background-color:#FF9191 ;

    border-radius: 5px;
  }
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color:white ;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id="qq" href="dashboard.php" style="color:#795E5E;">Blood Bank & Donation </a>
    </div>
    <ul class="nav navbar-nav navbar-right"  >

      <li class="dropdown">
      <li><a  href="dashboard.php" style="color:#432E2E ;">
        <?php
include 'conn.php';
$username = $_SESSION['username'];
$sql = "select * from admin_info where admin_username='$username'";
$result = mysqli_query($conn, $sql) or die("query failed.");
$row = mysqli_fetch_assoc($result);
$name = $row['admin_name'];
echo " <li> <p >Welcome to {$name}</p> </li>";

?>
</a></li>
          <li><a href="change_password.php" style="color:#51504E  ">Change Password </a></li>
          <li><a href="logout.php" style="color:#E84343 ;">Logout</a></li>


    </li>
    </ul>

  </div>

</nav>
</body></html>
