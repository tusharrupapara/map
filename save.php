<?php


$timezone = 'Asia/Calcutta';
	date_default_timezone_set($timezone);
 $conn = mysqli_connect("localhost","root","","map");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
	if(isset($_POST['add'])){
		
	


		$place_name = $_POST['place_name'];
		$loc_lat = $_POST['loc_lat'];
		$loc_long = $_POST['loc_long'];
		$city = $_POST['city'];
		$month = $_POST['month'];
		$time = $_POST['time'];
		$time = date('H:i:s', strtotime($time));

	

		$sql = "INSERT INTO saved_area ( area	,lat	,lon,	city,	month,	time
) VALUES

											('$place_name','$loc_lat', '$loc_long', '$city', '$month', '$time')";
		if($conn->query($sql)){
			echo'Bill added successfully';
		}
		else{
	echo "error";
		}
	}
	else if(isset($_POST['update'])){
		$id = $_POST['id'];
		$account_id = $_SESSION['account_id'];
		$bill_no = $_POST['bill_no'];
		$bill_date = $_POST['bill_date'];
		$billing_company = $_POST['billing_company'];
		$client_name = $_POST['cat'];
		$assignment = $_POST['subcat'];
		$gross_value = $_POST['gross_value'];
		$tax = $_POST['tax'];
		$total = $_POST['total'];
		$due_date = $_POST['due_date'];

			$account_id=trim($_SESSION['account_id']);


		$sql = "UPDATE bills SET account_id = '$account_id', bill_no = '$bill_no', bill_date = '$bill_date', billing_company = '$billing_company', client_code = '$client_name', assignment = '$assignment', gross_value = '$gross_value', tax = '$tax', total = '$total', due_date = '$due_date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Bill is updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: map.php');
?>
