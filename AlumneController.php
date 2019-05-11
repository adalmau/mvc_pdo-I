<?php
	require("AlumneModel.php");
	
	function getAlumnes()
	{
		return modQuery();
	}
	
	function addAlumne($nom, $cognom, $data_naixement)
	{
		return modAdd($nom, $cognom, $data_naixement);
	}
	
	function upAlumne($id, $nom, $cognom, $data_naixement)
	{
		return modUpdate($id, $nom, $cognom, $data_naixement);
	}
	
	function getAlumne($id)
	{
		return modQuery($id);
	}
	
	function deleteAlumne($id)
	{
		return modDelete($id);
	}
	
	
	/**** FUNCIONS PER CARREGAR LES VISTES ***/
	
	function loadMainView()
	{
		$result = getAlumnes();
		require_once("MainView.php");
	}
	
	function loadNewAlumneView()
	{
		require_once("NewView.php");
	}
	
	function loadEditAlumneView($id)
	{
		$result = getAlumne($id);
		require_once("EditView.php");
	}
	
	function loadShowAlumneView($id)
	{
		$result = getAlumne($id);
		require_once("ShowView.php");
	}
?>
