'<body style="background-color:#A02CEE;
box-sizing: border-box;"><center><h1 style="font-color:red; margin-top:15%;font size="10px"">'.'Log in to your Stream-X account '.'</h1></center></body>'
<?php
require'connect.php';

if (isset($_POST['submit']))
 {
      $user=$_POST['username'];
      $pwd=$_POST['password'];	
      $sql="SELECT * FROM STUDENT_INFO WHERE username='$user' && password='$pwd'";
      $data=mysqli_query($con,$sql);
      $total=mysqli_num_rows($data);
      if($total==1)
      {
      	echo 'password correct';
      }
      else
        echo 'incorrect password';

}
else
	echo 'please press login button';
?>