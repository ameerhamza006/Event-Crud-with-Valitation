<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


$servernamedb = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "event";

$connect = mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);


function register()
{
	if(isset($_POST['btn']))
	{
	global $connect;
		

	
	$name = $_POST['fullname'];
	$designation = $_POST['designation'];
	$email = $_POST['emaill'];
	$phone = $_POST['phonee'];
		
		if(empty(($phone)))
		{
			echo "phone is Required";
			
		}else{
			
		if(empty(($name)))
		{
			echo "Name is Required";
		}else {
			if(empty($designation))
			{
				echo "designation is Required";
			}else {
				
				if(empty($email))
			{
				echo "email is Required";
			}else {
	
				if(!preg_match("/^[0-9]*$/", $phone)) {
					
					echo "enter a valid phone number";
				
					}else{
					
					
					
					
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name )) {
                     echo  "Name Feild Only letters allowed";
}else {
  
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}else {
						

	
	$insert = "insert into register (name,designation,email,phone) values('$name','$designation','$email','$phone')";
	$run = mysqli_query($connect,$insert);
	
	if($run)
	{
		echo "<div class='alert alert-success' role='alert'>
		Register Successfully go to <a href='index.php'> Home </a>
	  </div>";
	}else{
		echo "Something Wrong";
	}
					} #email Validate 
				} #name Validate 
		
				} #number Validate 
				} # email required validate
			} # designation required validate
		} # Name required validate
		} #phone reqiurd validate 
	} #isset 
	
	
}


function view_all()
{
	$output = "";
	global $connect;

	$select = "select * from register ORDER by id DESC";
	$run = mysqli_query($connect,$select);

	$s = 1;
	while($fetch = mysqli_fetch_array($run))
	{
		$id = $fetch['0'];
		$name = $fetch['1'];
		$destination = $fetch['2'];
		$email = $fetch['3'];
		$phone = $fetch['4'];

	  $output = "<tr>
		<th scope='row'>".$s++."</th>
		<td>$name</td>
		<td>$destination</td>
		<td>$email</td>
		<td>$phone</td>
		<td><a href='dashboard.php?Edit=$id' class='btn btn-success' >Edit</a><a href='dashboard.php?Delete=$id' class='btn btn-danger' > Delete </a></td>
	   
	  </tr>";


	  echo $output;
	}
	
}


function Edit()
{

	$get_id = $_GET['Edit'];
	if(isset($_POST['ebtn']))
	{
	global $connect;
		

	
	$ename = $_POST['efullname'];
	$edesignation = $_POST['edesignation'];
	$eemail = $_POST['eemaill'];
	$ephone = $_POST['ephonee'];
		
		if(empty(($ephone)))
		{
			echo "phone is Required";
			
		}else{
			
		if(empty(($ename)))
		{
			echo "Name is Required";
		}else {
			if(empty($edesignation))
			{
				echo "designation is Required";
			}else {
				
				if(empty($eemail))
			{
				echo "email is Required";
			}else {
	
				if(!preg_match("/^[0-9]*$/", $ephone)) {
					
					echo "enter a valid phone number";
				
					}else{
					
					
					
					
				if (!preg_match("/^[a-zA-Z-' ]*$/",$ename )) {
                     echo  "Only letters allowed";
}else {
  
					if (!filter_var($eemail, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}else {
						

	
	$update = "UPDATE register SET name='$ename',designation='$edesignation',email='$eemail',phone='$ephone' where id='$get_id'";
	$run = mysqli_query($connect,$update);
	
	if($run)
	{
		echo "<div class='alert alert-success' role='alert'>
		Edit Successfully go to <a href='dashboard.php'> Dashboard </a>
	  </div>";
	}else{
		echo "Something Wrong";
	}
					} #email Validate 
				} #name Validate 
		
				} #number Validate 
				} # email required validate
			} # designation required validate
		} # Name required validate
		} #phone reqiurd validate 
	} #isset 
	

	


}


function Delete()
{
	$get_id = $_GET['Delete'];
	global $connect;

	$delete = "DELETE from register where id='$get_id'";
	$run = mysqli_query($connect,$delete);

	if($run)
	{

		echo "<script>location.href='dashboard.php';</script>";

		echo "<div class='alert alert-success' role='alert'>
		Successfully Delete 
	  </div>";
	}else{
		echo "Something Wrong";
	}



}









?>