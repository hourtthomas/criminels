<?php
$titre = 'Recherche criminels';
ob_start(); ?>


<form action="controllers/agent_verify.php" method="post">
    <div class="form-group">
        <label for="nom_criminel">Nom du criminel</label>
        <input type="text" name="pseudo_agent" id="pseudo_agent" class="form-control" placeholder="Entrez votre nom" aria-describedby="helpId">
    </div>
    <button type="submit">Envoyer</button>
</form>