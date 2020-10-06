<!DOCTYPE html>
<html>

<head>
	<title>php syntex</title>
	<style>
		.phpcoding
		{
			width: 60%; 
			margin: 0px auto; 
			background-color: #ddd;  
			color: tomato; padding: 20px;
		}
		.header, .footer 
		{
			background-color: #444; color: yellow; text-align: center; padding: 15px;
		}
		.main
		{
			min-height: 400px;
			margin: 0px;
		}

	</style>
</head>

<body>
	<div class="phpcoding">
		
	<section class="header">
		<h2>PhP Coding</h2>
	</section>
	
	<section class="main">
		<br>

		<form method="POST" action="" method="post">

		<table>
			<tr>
				<td> Name : </td>
				<td> <input type="text" , name="name"> </td>
			</tr>

			<tr>
				<td> Email : </td>
				<td> <input type="text" , name="email"> </td>
			</tr>

			<tr>
				<td> password : </td>
				<td> <input type="text" , name="password"> </td>
			</tr>

			<tr>
				<td> comment : </td>
				<td> <textarea name="comment" rows="5" cols="40"> </textarea> </td>
			</tr>

			<tr>
				<td> Gender : </td>
				<td>
				 <input type="radio" , name="gender" , value = "female"> Female
				 <input type="radio" , name="gender" , value = "male"> male 
				</td>

			</tr>
			 <tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table> 
		</form>


		<?php

				$name = $email = $comment = $gender = $password = " ";

				if ($_SERVER["REQUEST_METHOD"] == "POST" ) 
				{
					$name = validate ($_POST['name']);
					$email = validate ($_POST['email']);
					$password = validate ($_POST['password']);
					$comment = validate ($_POST['comment']);
					$gender = validate ($_POST['gender']);



			if (empty($name) || empty($email) || empty($password) || empty($comment) || empty($gender) )
          
            {
              echo 'fields must not be empty'."<br>";
              echo 'data not submitted'."<br>";
            }

            else
          		  {
  					$myfile = fopen("data.txt", "a+");
  					$datatxt = $name . "\n" . $email . "\n". $password. "\n". $comment . "\n". $gender . "\n \n" ;
  					fwrite($myfile, $datatxt);
  					echo "data submitted successfully";
  					fclose($myfile);
  					
  				}
    			
			}
  
					function validate($data)
					{
						$data = trim($data);
						$data = stripcslashes($data);
						return $data;

					}


		?>


	</section>
	
	<section class="footer">
		<h2>PhP Coding footer</h2>
	</section>	

</div>

</body>

</html>