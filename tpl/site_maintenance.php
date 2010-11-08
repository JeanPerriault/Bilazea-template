<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/maintenance/maintenance.php
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
  <p class="error_message"><?php printLgFileText("CONSTRUCT_MSG"); ?></p>
</div>

<img class="img-accueil reflect" 
     src="<?php echo LINK_DIRECTORY_CNT?>category_0/img/category_0_img.jpg" 
     alt="Image Accueil" />
