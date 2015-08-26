<?php

	$db = new PDO('mysql:host=127.0.0.1;dbname=chat','root','');

	$query = $db->prepare("SELECT * FROM messages");
	$query->execute();

	while($fetch = $query->fetch(PDO::FETCH_ASSOC))
	{
		$name = $fetch['name'];
		$message = $fetch['messages'];
		echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";
	}
?>