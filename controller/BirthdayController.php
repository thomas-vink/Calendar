<?php
require(ROOT . "model/birthdayModel.php");

function index()
{
    render("Birthday/index", array( 
    'birthdays' => getBirthday()
    ));
}

function Create()
{
	render("Birthday/create");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Birthday/index");
}

?>