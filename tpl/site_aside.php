<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_aside.php
 * 
 * Description:
 * This file contains code
 * - aside stuff
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>

    <!-- Aside -->
    <div id="aside">
      <div id="underAside">

        <!-- Go to top links -->
        <a id="iconGoToTopL" 
           class="toolTips smoothAnchors iconGoToTopLcl" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("GO_TO_TOP"); ?>">
        </a>
        <a id="iconGoToTopR" 
           class="toolTips smoothAnchors iconGoToTopRcl" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("GO_TO_TOP"); ?>">
        </a>

        <!-- Aside links -->
        <p>
          <a class="toolTips" 
             href="<?php echo LINK_WEBSITE ?>" 
             title="<?php printLgFileText("SITE_NAME2"); ?>" 
             rel="<?php printLgFileText("CAT_0"); ?>">
            <?php printLgFileText("CAT_0"); ?>
          </a> | 
          <a class="toolTips" 
             href="<?php echo LINK_INDEX.getLgFileText("CONTENT")."=".getLgFileText("MAP") ?>" 
             title="<?php printLgFileText("SITE_NAME2"); ?>" 
             rel="<?php printLgFileText("SITE_MAP"); ?>">
            <?php printLgFileText("SITE_MAP"); ?>
          </a> | 
          <a class="toolTips" 
             href="rss.xml" 
             title="<?php printLgFileText("RSS"); ?>" 
             rel="<?php printLgFileText("RSS_DESC"); ?>">
            <?php printLgFileText("RSS"); ?>
          </a> | 
          <a class="toolTips" 
             href="<?php echo MAILTO_ADMIN; ?>" 
             title="<?php printLgFileText("SITE_NAME2"); ?>" 
             rel="<?php printLgFileText("CONTACTS_DESC"); ?>">
            <?php printLgFileText("CONTACTS"); ?>
          </a>
        </p>
        <p><?php printLgFileText("COPYRIGHT"); ?></p>
        <p><?php printLgFileText("MADE_WITH"); ?> 
          <a class="externalLink external toolTips" 
             href="<?php echo FOOTER_LINK3_R; ?>" 
             title="<?php printLgFileText("APTANA"); ?>" 
             rel="<?php printLgFileText("APTANA_HOME"); ?>">
            <?php printLgFileText("APTANA"); ?>
          </a>
        </p>
        <p><?php printLgFileText("SITE_ASIDE_TEXT"); ?></p>
      </div>
    </div>
