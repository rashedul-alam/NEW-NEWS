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
	<script language="Javascript">

            function postRequest(strURL)
            {
                var xmlHttp;
                if (window.XMLHttpRequest) // Mozilla, Safari, ...
                {
                    var xmlHttp = new XMLHttpRequest();
                    console.log("normal");
                }
                else if (window.ActiveXObject) // IE
                {
                    var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    console.log("MS");
                }
                else
                {
                    alert("your browser does not support AJAX");
                    return;
                }
                xmlHttp.open('POST', strURL, true);
                xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xmlHttp.onreadystatechange = function()
                {

                    if (xmlHttp.readyState == 4)
                    {
                        updatepage(xmlHttp.responseText);
                    }
                }
                xmlHttp.send(strURL);
            }
            function updatepage(str)
            {
                document.getElementById("msg").innerHTML = str;
            }
            function show()
            {
                var div=document.getElementById("msg");
                console.log('result got');
                div.innerHTML = '<img src="img/loader.gif" />';
                console.log('loader got');
                var email=document.getElementById("email");
                var emailvalue=email.value;
                var url="emailcheck.php?emailvalue="+emailvalue;
                postRequest(url);
                console.log('request sent');

            }
		</script>

</head>
<body><div class="topnav">
  <a style="float:right;font-family: Arial, Helvetica, sans-serif;font-size: 30px;color: Blue; background-color: white;" href="#">BBC</a>
  <a style="float:right" href="#">MENU</a>
  <a style="float:right" href="#">NEWS</a>
</div>
<div class="sidenav">
<a style="float:right" href="#"></a>
  <li><a href="home.php">Insert Data</a></li>
             <li><a href="home.php">Insert Data</a></li>
            <li ><a href="viewdata.php">View data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li class="active"><a href="loginv.html">Login</a></li>
            <li><a href="regv.html">Register</a></li>


</div>

  


<div class="content">
  <h2> User Login Page</h2><hr>
			<div class="form-group">
				<form method="post" action="loginm.php" name="login">
					<label for="username">User Name</label>
					<input type="text" name="un" class="form-control" /> <br/>
					<label for="password">Password</label>
					<input type="password" name="pw" class="form-control" /><br/>
					<input type="submit" name="submit" value="submit" class="btn btn-success" />
				</form>
			</div>
		</div>

</body>
</html>
