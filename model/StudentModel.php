<?php
function getBirthdays{
	$db->prepare("SELECT * FROM birthdays ORDER BY month");
	$query->execute();
	return $query->fetchAll;
}
?>