<?php

	$connect = mysqli_connect('localhost','root','','fabricrent');

	if(!$connect){
		echo mysqli_error($connect);
	}
?>