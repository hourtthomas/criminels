<?php
session_start();
$accreditation = 1;//$_SESSION['accreditation'];

switch ($accreditation) {
    case 1:
    case 2:
        ob_start();?>
        <div></div>
        <?php $content = ob_get_clean();
        break;
    case 3 :
        ob_start();?>
        <div></div>    
        <?php $content = ob_get_clean();
        break;
    default:
        
    break;
}

require ('templates/fiche_criminel.php');