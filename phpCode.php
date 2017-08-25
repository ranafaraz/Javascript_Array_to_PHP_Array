<!-- database connection -->
<?php 
         define ("DB_SERVER","localhost");
         define ("DB_USER","root");
         define ("DB_PASSWORD","");
         define ("DB_NAME","mobile_shop");

		 $connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

        if(mysqli_connect_errno())
		{
			die("connection failed!".
			mysqli_connect_error().
			"(".mysqli_connect_errno().")");
		}
		else
		{
			echo "success";
		}
?>
<?php
		//post method store the string in $name variable 	
		$name = $_POST['one'];
		
		//explode function change the string into array
		$name_arr=explode(',',$name);
		
		$f_name = $_POST['two'];
		$f_name_arr=explode(',',$f_name);
		$roll_no = $_POST['three'];
		$roll_no_arr=explode(',',$roll_no);
		$phone_no = $_POST['four'];
		$phone_no_arr=explode(',',$phone_no);
		
		//count function count the length of the array
		$length = count($name_arr);
		
		//this lines of code print all the arrays indvidualy
		/*
			$name = $_POST['one'];
            $name_arr=explode(',',$name);
			print_r($name_arr);
			var_dump($name_arr);
					echo "<hr>";
			

			$f_name = $_POST['two'];
	        $f_name_arr=explode(',',$f_name);
			print_r($f_name);
			var_dump($f_name);
					echo "<hr>";

			$roll_no = $_POST['three'];
	        $roll_no_arr=explode(',',$roll_no);
			print_r($roll_no);
			var_dump($roll_no);
					echo "<hr>";
					
			$phone_no = $_POST['four'];
	        $phone_no_arr=explode(',',$phone_no);
			print_r($phone_no);
			var_dump($phone_no);
			echo count($phone_no);
					echo "<hr>";  */
				
		//insert query		
        for($i=0; $i< $length; $i++)
		{
			$query = "INSERT INTO info(name, f_name, roll_no, phone_no) 
			          VALUES( '$name_arr[$i]' ,'$f_name_arr[$i]','$roll_no_arr[$i]','$phone_no_arr[$i]' )";
			$result = mysqli_query($connection, $query);
			if(!$result)
			{
				echo "<br>";
				echo "something wrong!";	
			}
		}			
?>
