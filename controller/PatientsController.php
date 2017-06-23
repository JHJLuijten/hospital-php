<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
	render("patients/index", array(
		'patients' => getPatientsWithSpeciesDescription()
	));
}

function create()
{
	render("patients/create");
}
function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}
function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}
