<?php 
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_settings.php
 * 
 * Description:
 * This file contains code
 * - to set settings used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web 
 */
///////////////////////////////////////////////////////////////////////////////
?>

      <!-- Language hidden div -->
      <div id="settingsHidden">

        <!-- Slide in -->
        <a id="settingsLinkSlideIn" 
           href="#" 
           class="iconHideLan toolTips" 
           title="<?php echo printLgFileText("SITE_NAME2"); ?>"
           rel="<?php printLgFileText("OPEN_PANEL"); ?>">
        </a>
      </div>


      <!-- Language div -->
      <div id="settings">

        <!-- Slide out -->
        <a id="settingsLinkSlideOut" 
           href="#" 
           class="iconHideLan toolTips" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("CLOSE_PANEL"); ?>">
        </a>

        <!-- Language -->
        <div id="language">
          <p><?php printLgFileText("LANGUAGE"); ?></p>
          <ul id="navlist">
            <li>
              <form action="<?php echo getPageUrlForLanguage(LG_FR); ?>" method="post">
                <p><input type="submit" name="lg" value="<?php echo LANG_FR; ?>" /></p>
              </form>
            </li>
            <li>
              <form action="<?php echo getPageUrlForLanguage(LG_EN); ?>" method="post">
                <p><input type="submit" name="lg" value="<?php echo LANG_EN; ?>" /></p>
              </form>
            </li>
            <li>
              <form action="<?php echo getPageUrlForLanguage(LG_ES); ?>" method="post">
                <p><input type="submit" name="lg" value="<?php echo LANG_ES; ?>" /></p>
              </form>
            </li>
          </ul>
        </div>

        <!-- Documentation link -->
        <div id="documentation">
          <p><?php printLgFileText("DOCUMENTATION"); ?></p>
          <ul>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_INTERNAL_DOC; ?>"
                 title="<?php printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("GOTO_DOCUMENTATION"); ?>">
                 <?php printLgFileText("GOTO_DOCUMENTATION"); ?>
               </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_WIKI_DOC; ?>"
                 title="<?php printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("GOTO_DOCUMENTATION_WIKI"); ?>">
                 <?php printLgFileText("GOTO_DOCUMENTATION_WIKI"); ?>
               </a>
            </li>
          </ul>          
        </div>
      </div>
