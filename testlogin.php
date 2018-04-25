
<?php 
	
	$connection= mysqli_connect('localhost', 'root','','test10');
	
	if (!$connection){ die("Unable to connect");}
	
	if (isset($_POST['Submit'])){
	
		
	
	$_usernameQuery = $_POST['username'];
	$_passQuery = $_POST['password'];
	
	
	$query1 = "select * from accounts where username= '$_usernameQuery' and password = '$_passQuery' ";
	$result = mysqli_query($connection,$query1);

	
	 if(mysqli_num_rows($result) == 1 ) {
	
		 session_start();
	     $row = mysqli_fetch_assoc($result);
   	 
   	 	$_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['type'] = $row['type'];
        echo $row['type'];
    if($row['type'] === 'admin'){
         
         header("location:welcomeadmin.php");}
         
         else if($row['type'] === 'user')
         { header("location:welcomeuser.php");}

	 	if(isset($_POST['checkbox'])){
	 	echo "checkbox is checked<br>";
	$cookiename1 = "mayada";
	setcookie($cookiename1 , $_POST['username'], time()+(86400*3));
		if(isset($_COOKIE[$cookiename1])){echo "usrename cookie is set<br>";}
	$cookiename2 = "Aya";
  	setcookie($cookiename2, $_POST['password'], time()+(86400*3));
  	if(isset($_COOKIE[$cookiename2])){echo "password cookie ais set<br>";}
  	
  		if(isset($_SESSION['id'])){echo "id session is set<br>";}
  		if(isset($_SESSION['username'])){echo "username session is set<br>";}
 		   }
 	}
 		  }
		 else {
 		   echo "<br><h1>Invalid username or password!!!</h1><br>";
		} 
		
 

   

	mysqli_close($connection);