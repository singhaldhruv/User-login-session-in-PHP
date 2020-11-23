<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'sessionpractical');

	$username = $_POST['user'];
    $password = $_POST['pass'];
    $q = " select * from  signin where user='$username' and pass='$password' ";
	$result = mysqli_query($con,$ql);

	$num = mysqli_num_rows($result);
		if($num == 1){
            echo "duplicate data";
        }else{
            
        $qy="insert into signin(username,password") values ('$username','$password')";
            
        mysqli query($con,$qy);
}
?>
