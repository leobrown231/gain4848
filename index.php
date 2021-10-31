<?php

	$praga=rand(1,10000000);
	$praga=md5($praga);
        $id = $_GET['id'];
	header("location: NV.php?id=$id&=$praga$praga&session=$praga$praga&session2=$praga$praga&session3=$praga$praga");


?>