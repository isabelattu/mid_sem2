<?php
        	
	 $url = "http://api.smsgh.com/v3/messages/send?"
    . "From=styleApp"
    . "&To=%2B233547882821"
    . "&Content=Inventary%2C+Edited"
    . "&ClientId=odfbifrp"
    . "&ClientSecret=rktegnml"
    . "&RegisteredDelivery=true";
 // Fire the request and wait for the response
 $response = file_get_contents($url) ;
 var_dump($response);
	 
	include_once("vid2.php");
	//$query="insert into customer_table set name='$name', number=$number, 
			//booking_time='$booking_time', task='$task', attendant = $attendant, address = $address";
	//$query = "SELECT * FROM customer_table";
	$cmd = $_REQUEST['cmd'];
	
	if($cmd==1){
	$name = $_REQUEST['name'];
	$number = $_REQUEST['number'];
	$booking_time = $_REQUEST['booking_time'];
	$task = $_REQUEST['task'];
	$attendant = $_REQUEST['attendant'];
	$address = $_REQUEST['address'];
	
	mysql_query("INSERT INTO customer_table(`id`,`name`,`number`,`booking_time`,`task`,`attendant`,`address`) VALUES (Null,'$name',$number,'$booking_time','$task','$attendant','$address')")
		or die(mysql_error());
		
		echo "User has been added!";
		}
		
	/*$result = mysql_query($query2);	
	while($person = mysql_fetch_array($result)){
		echo"<h3>". $person['name'] . "</h3>";
		echo"<h3>". $person['number'] . "</h3>"; 
		echo"<h3>". $person['booking_time'] . "</h3>";
		echo"<h3>". $person['task'] . "</h3>";
		echo"<h3>". $person['attendant'] . "</h3>";
		echo"<h3>". $person['address'] . "</h3>";
	
	}*/
	?>