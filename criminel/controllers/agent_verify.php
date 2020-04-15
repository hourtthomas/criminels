<?php
//connection check
$pseudo = htmlspecialchars($_POST['pseudo_agent']);
$mdp = htmlspecialchars($_POST['mdp_agent']);

try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=criminels;charset=utf8', 'thomas', 'stagiaire');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
    }

try{
    $sqlr = "SELECT * FROM agents WHERE pseudo_a = ?";
    $stmt = $bdd->prepare($sqlr);
    $stmt->execute([$pseudo]);
    $agent = $stmt->fetch();
    } catch (Exception $err){
            die('Erreur : ' . $err->getMessage());
            }

            if (password_verify($mdp, $agent['mot_de_passe_a']))
                header('Location:../interface.php');
            else {
                echo 'mot de passe invalide';
            }

    $agent['niveau_accreditation_a'];


