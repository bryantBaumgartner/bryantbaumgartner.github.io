<?php
	$alllines = file_get_contents("records.json");
	$accessories = json_decode($alllines);
	foreach ($accessories->accessories as $accessory){
		print '<option value="'.$accessory->name.'">$field</option>';
	}
?>