<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
	<style>
.navi {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.nav {
  float: left;
}

.nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.nav a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: red;
}
.rounded-corners {
  border-radius: 160px;
  overflow: hidden;
}
</style>

	

</head>
<body>
<ul class=navi>
        <li class=nav><a  href="welcomelandlord.php">Home</a></li>
        <li class=nav><a href="landlordprofile.php">About</a></li>
        <li class= nav><a href="logout.php">Contacts</a></li>
        </ul>
		<div class="container">
	<fieldset class="choose">
	<div >
		<h1 class="choo">REGISTER AS:</h1>
		<a href="adminsignup.php" title= "register"  ><p><input type="submit" name="admin" value="ADMIN"  class="btn btn-primary btn-lg"></p></a> 
		<a href="tenantsignup.php" title= "register" ><p><input type="submit" name="admin" value="TENANT"  class="btn btn-primary btn-lg"></p></a> 
    <a href="landlordsignup.php" title= "register"  ><p><input type="submit" name="admin" value="LANLORD"  class="btn btn-primary btn-lg"></p></a> 
	</div>
</fieldset>
</div>


</body>
</html