<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>News Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}
</style>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body><div class="topnav">
  <a style="float:right;font-family: Arial, Helvetica, sans-serif;font-size: 30px;color: Blue; background-color: white;" href="#">BBC</a>
  <a style="float:right" href="#">MENU</a>
  <a style="float:right" href="#">NEWS</a>
</div>
<div class="sidenav">
<a style="float:right" href="#"></a>
 <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
                echo '<li><a href="home.php">Insert Data</a></li>
                        <li class="active"><a href="viewdata.php">View data</a></li>
                        <li><a href="listdata.php">List Data</a></li>';
                echo "<li><a href=\"logoutm.php\">Logout</a></li>";
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";
                

            }
            else{
                echo '<li><a href="home.php">Insert Data</a></li>
            <li class="active"><a href="viewdata.php">View data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li><a href="loginv.html">Login</a></li>
            <li><a href="regv.html">Register</a></li>';
            }
            ?>


</div>

  


<div class="content">
  <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
    <form name="summernote" method="post" action="setdata.php">
		News Headline:<br/><input type="text" class="form-control" name="heading"/><br/>
        News Body:<br/><textarea name="newsbody" id="summernote" class="summernote"></textarea><br/>
        <input type="submit" class="btn btn-success" value="Save News"/>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>
</html>
