<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

