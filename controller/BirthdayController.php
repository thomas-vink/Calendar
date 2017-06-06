<?php
require(ROOT . "model/birthdayModel.php");

function index()
{
    render("Birthday/index", array( 
    'birthdays' => getBirthday()
    ));
}
		// die dinges maken
function Create()
{
	render("Birthday/create");
}
		//die dinges ook maken
function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Birthday/index");
}
		// dinges uit database verwijderen 
function delete($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Birthday/index");
}




?>