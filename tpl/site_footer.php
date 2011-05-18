<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_footer.php
 * 
 * Description:
 * This file contains code
 * - to set aside/footer links
 * 
 * Date:
 * 2010/10/10
 * R1: 2011/01/10
 * R2: 2011/02/27
 * R3: 2011/05/15
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>

    <!-- Footer -->
    <div id="footer">

      <!-- Aside -->
      <div id="aside">

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
          <a class="toolTips aContact" 
             href="<?php echo MAILTO_ADMIN; ?>" 
             title="<?php printLgFileText("SITE_NAME2"); ?>" 
             rel="<?php printLgFileText("CONTACTS_DESC"); ?>">
            <?php printLgFileText("CONTACTS"); ?>
          </a>
        </p>
        <p><?php printLgFileText("COPYRIGHT"); ?></p>
        <p><?php printLgFileText("SITE_ASIDE_TEXT"); ?></p>

        <!-- FOOTER LINKS -->
        <?php include(LINK_FOOTER_L); ?>

      </div>
    </div>
