<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="head.css">
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
	<style>
		.main{
		background-image: url("pic.jpg"); ;
		width: 97%;
		padding-top: 0px;
		margin-left: 20px;
		margin-right: 20px;
		height:700px;
		background-repeat: no-repeat;
		background-position: center center;
		background-attachment: relative;
  		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
		body{
		max-width: 100%;
		overflow-x: hidden;
	}
		.grid{
		background-color: rgba(144,164,174 ,0.6);
		margin-top:10%;
		margin-left: 30%;
		margin-right: 30%;
		height: 400px;
		padding-top: 10px;
    border-radius: 5px 10px 40px 30px;
    border:10px 20px 30px 40px;
    border-style: groove;
    border-width: 10px;
	}
		#btn{
    	background-color: purple;
	    border: 1.5px solid lightpurple;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	 
	    font-size: 16px;
	    margin: 4px 2px;
	    border-radius: 11px;
	    cursor: pointer;
	    width: 50%;
	}
	nav{
  display: none;
}
	
@media screen and (max-width: 1000px) {
    nav{
      display: block;
      float:right;
      margin-top: -5%;
    }
    .p4 li{
      display: none;
    }
    select {
  font: 400 12px/1.3 "Helvetica Neue", sans-serif;
  -webkit-appearance: none;
  appearance: none;
  border: 1px solid purple;
  line-height: 1;
  outline: 0;
  color: purple;
  border-color: purple;
  padding: 0.65em 2.5em 0.55em 0.75em;
  border-radius: 3px;
  background: linear-gradient(purple, purple) no-repeat,
              linear-gradient(-135deg, rgba(255,255,255,0) 50%, white 50%) no-repeat,
              linear-gradient(-225deg, rgba(255,255,255,0) 50%, white 50%) no-repeat,
              linear-gradient(purple, purple) no-repeat;
  background-color: white;
  background-size: 1px 100%, 20px 20px, 20px 20px, 20px 60%;
  background-position: right 20px center, right bottom, right bottom, right bottom;  
  margin-right: 2%; 
  float: right;
}
  }
	</style>
</head>
<body>
	
	<div class="main">
		<div class="p3">
        <ul class="unordered_list">
            <li><img class="logo" src="loj.png" height="70px" width="90px"></li> &nbsp;
            <li id="name" title="FabricRent">FabricRent</li></a>
            <div class="p4">
            <li><a href="head.php" title="Home">Home</a></li>
            <li><a href="log.php" title="Login">Login</a></li>
            <li><a href="register.php" title="Register">Register</a></li>
            <li><a href="comment.php" title="Contact">Comments</a></li>
          </div>
        </ul>
        <nav role="select">
      <select style="font-size: 20px;">
      <option href="#">Home</option>
        <option href="#">Login</option>
        <option href="#">Register</option>
        <option href="#">Contact</option>
    </select>
  </nav>
    </div>
		<center>
		<div class="grid">
			<h2 style="font-size:40px">Login to Our Page</h2><br>
            <form action="./logd.php" method="POST">
            <p>
            <label style="font-size: 20px"><b>Username:</b></label><br><br>
            <input type="text" id="user" name="user" style="width: 50%" >
            </p>  
            <p>
            <label style="font-size: 20px"><b>Password:</b></label><br><br>
            <input type="password" id="pass" name="pass" style="width: 50%" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </p>
            <p>
            <input type="submit" id="btn" value="Login">
            </p>
            </form>
        </div>
		</center>
	</div>

</body>
</html>