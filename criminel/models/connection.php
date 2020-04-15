<?php

	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=criminels;charset=utf8', 'thomas', 'stagiaire');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
    }
