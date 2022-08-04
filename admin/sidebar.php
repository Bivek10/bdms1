<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
font-family: 'Averia Gruesa Libre';font-size: 15px;
    color:#5DD3D3;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 210px;
  background-color: #FFFFFF;
  position: fixed;
  height: 100%;
  overflow: auto;

}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a:hover:not(.active) {
  background-color: #EEB5B5;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

a.act{
background: linear-gradient(to right, #F3BFA1 0%, #EF5959 100%);
color: white;
border-radius:2px;
}




@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar" ><b>
  <a href="dashboard.php"   <?php if($active=='dashboard') echo "class='act'"; ?>><span class="glyphicon glyphicon-dashboard"></span>&nbsp&nbspDashboard</a>
  <a href="add_donor.php"   <?php if($active=='add') echo "class='act'"; ?>><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbspAdd Donor</a>
  <a href="donor_list.php"   <?php if($active=='list') echo "class='act'"; ?>><span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Donor List</a>
  <a href="query.php"   <?php if($active=='query') echo "class='act'"; ?>><span class="glyphicon glyphicon-check"></span>&nbsp&nbspCheck User Request</a>

    <a href="pages.php"   <?php if($active=='pages') echo "class='act'"; ?>><span class="glyphicon glyphicon-edit"></span>&nbsp&nbspManage Pages Content</a>
  <a href="update_contact.php"   <?php if($active=='contact') echo "class='act'"; ?>><span class="glyphicon glyphicon-edit"></span>&nbsp&nbspUpdate Contact Info</a>

</div>
