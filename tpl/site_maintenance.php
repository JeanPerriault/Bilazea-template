<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_maintenance.php
 * 
 * Description:
 * This file contains code
 * - to set maintenance page of Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>

<h1><?php printLgFileText("MAINTENANCE"); ?></h1>

<div id="error">
  <p class="errorMessage"><?php printLgFileText("CONSTRUCT_MSG"); ?></p>
</div>

<img class="img-accueil reflect" 
     src="<?php echo LINK_IMG_MAINTENANCE ?>" 
     alt="Image Accueil" />
