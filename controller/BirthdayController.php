<?php
	require(ROOT . "model/birthdayModel.php");

	function index()
		{
		    render("Birthday/index", array( 
		    'birthdays' => getAllBirthdays()
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
				header("Location:" . URL . "error/Erroooor");
				exit();
			}

			header("Location:" . URL . "Birthday/index");
		}

			// dinges uit database verwijderen 
	function delete($id)
		{
			if (!deleteBirthday($id)) {
				header("Location:" . URL . "error/Erroooor");
				exit();
			}

			header("Location:" . URL . "Birthday/index");
		}
	function edit($id = ''){
		$birthdays = getBirthday($id);

		render("Birthday/edit", array('birthday' => $birthdays));
	}

	function editSave()
		{
			if (false == editBirthday()) {
				header("Location:" . URL . "error/Erroooor");
				exit();
			}

			header("Location:" . URL . "Birthday/index");
		}



?>