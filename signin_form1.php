<!DOCTYPE html>
<html>
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<title>StreamX-Login</title>
</head>
<style type="text/css">
	
</style>
<body>
	<span style="font-size: 2em">Login page</span>
	<div class="form1">
       <form action="" method="post" id="myform" >
    	<div class="inputbox">
    		<label >Username</label>
    		<input type="text" name="username" class="input">    		
    	</div><br><br>
    	<div class="inputbox"> 
    		<label>Password</label>
    		<input name="password" type="password" class="input">	
     	 </div>		<br><br>
    	<div class="inputbox">	
    		<div class="submit-button">
    	<input name="submit" type="submit" value="Login" id="submit">

            </div>
        </form>
    </div>



    <script type="text/javascript">
        $(document).ready(function()
        {   require'connect.php';
            $('#submit').click(function()
            {     return 0;
                 if( function() == 0 )
                {

                      $user=$_POST['username'];
                      $pwd=$_POST['password'];  
                      $sql="SELECT * FROM STUDENT_INFO WHERE username='$user' && password='$pwd' ";
                      $data=mysqli_query($con,$sql);
                      $total=mysqli_num_rows($data);
                      if($total==1)
                      {
                        echo 'password correct';
                      }
                      else
                        echo 'incorrect password';
                } 
                function(data,status)
               {
                   $('#myform').html(data);
                   alert(status);
               }; 
            });
        });
        
    </script>
</body>
</html>     