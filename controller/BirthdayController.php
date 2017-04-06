<?php

require_once(ROOT . "model/BirthdayModel.php");

function index(){
	$birthdays = getAllBirthdays();

	render('birthday/index' , array('birthdays' => getAllBirthdays()));
}