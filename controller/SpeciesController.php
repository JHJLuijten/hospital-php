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

function create()
{
	render("species/create");
}
function createSave()
{
	if (!createSpecies()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}
function edit($id)
{
	render("species/edit", array(
		'species' => getSpecie($id)
	));
}
function editSave($id)
{
	if (!editSpecies($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
} 