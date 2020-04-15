<?php $title = 'accueil'; ?>
<?php ob_start(); ?>

<form action="controllers/agent_verify.php" method="post">
    <div class="form-group">
        <label for="pseudo_agent">Nom de l'agent</label>
        <input type="text" name="pseudo_agent" id="pseudo_agent" class="form-control" placeholder="Entrez votre nom" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="mdp_agent">Password</label>
        <input type="password" name="mdp_agent" id="mdp_agent" class="form-control" placeholder="Entrez mot de passe" aria-describedby="helpId">
    </div>
    <button type="submit">Envoyer</button>
</form>

<?php $content = ob_get_clean();
require('views/templates/base.php');?>