<?php
	include ('conecta.php');
	
    $nome 	= $_POST["nome"] ." ";
	$nome 	.= $_POST["sobrenome"];
	$email 	= $_POST["email"];
	$ass 	= $_POST["ass"];
	$campo 	= $_POST["campo"];
	$time	= time();
	$data	= date("Y-m-d",$time);
	$id;
	// Check connection
	if ($mysqli_conn->connect_error) {
	    die("Connection failed: " . $mysqli_conn->connect_error);
	} 
	
	$sql = "INSERT INTO messages (date, email, `from`, message, subject, time) 
			VALUES ('$data', '$email', '$nome', '$campo', '$ass', '$time')";
	
	if ($mysqli_conn->query($sql) === TRUE) {
		$id = $mysqli_conn->insert_id;
		for($i=1; $i<=6; $i++){
			insertID_user($i,$id, $mysqli_conn);
		}
	    echo "New record created successfully com $id ";
	} else {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	function insertID_user($num,$id,$mysqli_conn){
		$usuario = 'usuario'.$num;
		$sql = "INSERT INTO $usuario (idmessage) 
				VALUES ('$id')";
		if ($mysqli_conn->query($sql) === TRUE) {
		}else {
	    	echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
		}
	}
	
	$mysqli_conn->close();
?>