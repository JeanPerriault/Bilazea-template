<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_lastmost.php
 * 
 * Description:
 * This file contains code
 * - last/most read articles
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

      <!-- Last / Most read articles hidden part -->
      <div id="lastMostHidden">
        <a id="lastmostLinkSlideIn" 
           href="#" 
           class="openImg toolTips" 
           title="<?php echo printLgFileText("SITE_NAME2"); ?>"
           rel="<?php printLgFileText("OPEN_PANEL2"); ?>">
        </a>
      </div>

      <!-- Last / Most read articles links -->
      <div id="lastMost">
        <div id="last">
          <p class="titleLastMost"><?php echo printLgFileText("LAST_NEWS"); ?></p>
          <ul>
            <li>
              <a href="<?php echo LINK_CAT_1_4 ?>" 
                 class="toolTips" 
                 title="<?php echo printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("CAT_1_4"); ?>">
                <?php echo printLgFileText("CAT_1_4"); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo LINK_CAT_1_2 ?>" 
                 class="toolTips" 
                 title="<?php echo printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("CAT_1_2"); ?>">
                <?php echo printLgFileText("CAT_1_2"); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo LINK_CAT_1_3 ?>" 
                 class="toolTips" 
                 title="<?php echo printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("CAT_1_3"); ?>">
                <?php echo printLgFileText("CAT_1_3"); ?>
              </a>
            </li>
          </ul>
        </div>

        <div id="most">
          <p class="titleLastMost"><?php printLgFileText("MOST_READ"); ?></p>
          <ul>
            <li>
              <a href="<?php echo LINK_CAT_1_1 ?>" 
                 class="toolTips" 
                 title="<?php echo printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("CAT_1_1"); ?>">
                <?php printLgFileText("CAT_1_1"); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo LINK_CAT_4 ?>"
                 class="toolTips" 
                 title="<?php echo printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("CAT_4"); ?>">
                <?php printLgFileText("CAT_4"); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo LINK_CAT_3_1 ?>"
                 class="toolTips" 
                 title="<?php echo printLgFileText("SITE_NAME2"); ?>" 
                 rel="<?php printLgFileText("CAT_3_1"); ?>">
                <?php printLgFileText("CAT_3_1"); ?>
              </a>
            </li>
          </ul>
        </div>

        <a id="lastmostLinkSlideOut" 
           href="#" 
           class="closeImg toolTips" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("CLOSE_PANEL2"); ?>">
        </a>
      </div>
