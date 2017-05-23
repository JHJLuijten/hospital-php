<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("species/index", array(
		'species' => getAllSpecies()
	));
}
function delete($id)
{
	if (!deleteSpecies($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}

