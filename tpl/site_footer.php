<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_footer.php
 * 
 * Description:
 * This file contains code
 * - to set footer links
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>

    <!-- footer -->
    <div id="footer">
      <div id="footerIn">
        <p class="footerLinkTitle"><?php echo printLgFileText("LINKS"); ?></p>

        <a id="footerLinkSlideOut" 
           href="#" 
           class="closeImg toolTips" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("CLOSE_PANEL"); ?>">
        </a>

        <!-- DIV Link bottom 1 -->
        <div id="footerLinksDiv1">
          <p class="titleLastMost"><?php printLgFileText("WEB_GALAXY"); ?></p>
          <ul class="footerLinksUl">
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK1_L; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK1_L"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK1_L"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK1_L"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK2_L; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK2_L"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK2_L"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK2_L"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                  href="<?php echo FOOTER_LINK3_L; ?>" 
                  title="<?php printLgFileText("SITE_FOOTER_LINK3_L"); ?>" 
                  rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK3_L"); ?>">
                  <?php printLgFileText("SITE_FOOTER_LINK3_L"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK4_L; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK4_L"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK4_L"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK4_L"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK5_L; ?>"
                 title="<?php printLgFileText("SITE_FOOTER_LINK5_L"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK5_L"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK5_L"); ?>
              </a>
            </li>
          </ul>
        </div>

        <!-- DIV Link bottom 2 -->
        <div id="footerLinksDiv2">
          <p class="titleLastMost"><?php printLgFileText("TOOLS"); ?></p>
          <ul class="footerLinksUl">
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK1_R; ?>"
                 title="<?php echo getLgFileText("SITE_FOOTER_LINK1_R"); ?>"
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK1_R"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK1_R"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK2_R; ?>"
                 title="<?php printLgFileText("SITE_FOOTER_LINK2_R"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK2_R"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK2_R"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo FOOTER_LINK3_R; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK3_R"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK3_R"); ?>">
                <?php printLgFileText("SITE_FOOTER_LINK3_R"); ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer hidden -->
    <div id="footerHidden">
      <div id="footerHiddenIn">
        <a id="footerLinkSlideIn" 
           href="#" 
           class="openImg toolTips" 
           title="<?php printLgFileText("SITE_NAME2"); ?>" 
           rel="<?php printLgFileText("OPEN_PANEL"); ?>">
        </a>
      </div>
    </div>
