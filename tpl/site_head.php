<?php 
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_head.php
 * 
 * Description:
 * This file contains code
 * - to set language used in Bilazea template
 * - documentation links
 * 
 * Date:
 * 2010/10/10
 * R1: 2011/01/10
 * R2: 2011/02/27
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>
    <!-- LINK BILA -->
    <a href="../" id="backBila">Back to Bilazea home page</a>

    <!-- LEFT TITLE -->
    <a id="titleLink" 
       class="toolTips fixedTitleLeft"
       href="<?php echo LINK_WEBSITE ?>"
       title="<?php printLgFileText("SITE_NAME2"); ?>"
       rel="<?php printLgFileText("GO_TO_HOME"); ?>">
       <?php printLgFileText("LEFT_TITLE"); ?>
    </a>

    <!-- HEAD -->
    <div id="header">

      <?php include(LINK_SETTINGS); ?>

      <!-- Title -->
      <div id="title">
        <a class="toolTips title" 
           href="<?php echo LINK_WEBSITE ?>" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("GO_TO_HOME"); ?>">
          <?php printLgFileText("SITE_TITLE_H1"); ?>
        </a>
      </div>

      <!-- Menu -->
      <?php if (!isMaintenance($maintenance)){
        include(LINK_NAVIGATION);
      }?>
      <hr />
    </div>
