<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>StreamX-Login</title>
</head>
<style type="text/css">
	
</style>
<body>
	<span style="font-size: 2em">Login page</span>
	<div class="form1">
       <form action="get1.php" method="post" id="myform" >
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
    	$(document).ready(function(){
             var form=$('#myform');
			 $('submit').click(function(){
                    $.ajax({
                       url: form.attr("action");
                      type: 'post',
					  data:$("#myform :input").serialize(),


                       success: function(data)
					   {
						   console.log(data);
					   }
					});
			 });
		});
    </script>
</body>
</html>     