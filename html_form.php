<!DOCTYPE html>
<html>
<head>
	
	<title>StreamX-Registration</title>
</head>
<style type="text/css">
	body
	{
		background-color:#A02CEE;
		margin:0;
		padding: 0;
		box-sizing: border-box;
	}
	.form1
	{ 
        position: absolute;
        margin:20vh 15vw;
		width:50vw;
		height:40vh;
		padding:4px;
		background: rgba(0,0,0,0.8);
		box-sizing: border-box;
		box-shadow: 0 100px 85px rgba(0,5,0,.9);
		border-radius: 10px;
		opacity: 0.9;

	}
	
	.inputbox
	{
		font-family: sans-serif;
		font-weight: 900px;
		color: white;
		word-spacing: 9px;
	}
	
</style>
<body>
	<div class="form1" style="padding: 30px">
       <form action="get.php" method="post" id="myform">
    	<div class="inputbox">
    		<label style="font-color:white">Name</label>
    		<input type="text" name="name">    		
    	</div><br>
    	<div class="inputbox">
    		<label>Surname</label>
    		<input type="text" name="surname">    		
    	</div><br>
    	<div class="inputbox">
    		<label>Username</label>
    		<input type="text" name="username">    		
    	</div><br>
    	<div class="inputbox">
    		<label>Password</label>
    		<input name="password" type="password">	
     	 </div>		<br><br>
    	<div class="inputbox">	
    	<input type="submit" value="Register">
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
					  data:$("#myform input").serialize(),


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