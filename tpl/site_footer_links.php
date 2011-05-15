<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_footer_links.php
 * 
 * Description:
 * This file contains code
 * - to set footer links
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

    <!-- footer links -->
    <div id="footerL">
      <div id="footerLIn">
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
                 href="<?php echo LINK_FOOTER_1; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK1"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK1"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK1"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_2; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK2"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK2"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK2"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                  href="<?php echo LINK_FOOTER_3; ?>" 
                  title="<?php printLgFileText("SITE_FOOTER_LINK3"); ?>" 
                  rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK3"); ?>">
                  <?php printLgFileText("SITE_FOOTER_LINK3"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_4; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK4"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK4"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK4"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_5; ?>"
                 title="<?php printLgFileText("SITE_FOOTER_LINK5"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK5"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK5"); ?>
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
                 href="<?php echo LINK_FOOTER_6; ?>"
                 title="<?php echo getLgFileText("SITE_FOOTER_LINK6"); ?>"
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK6"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK6"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_7; ?>"
                 title="<?php printLgFileText("SITE_FOOTER_LINK7"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK7"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK7"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_8; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK8"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK8"); ?>">
                <?php printLgFileText("SITE_FOOTER_LINK8"); ?>
              </a>
            </li>
          </ul>
        </div>

        <!-- DIV Link bottom 3 -->
        <div id="footerLinksDiv3">
          <p class="titleLastMost"><?php printLgFileText("SOCIAL"); ?></p>
          <ul class="footerLinksUl">
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_9; ?>" 
                 title="<?php echo getLgFileText("SITE_FOOTER_LINK9"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK9"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK9"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_10; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK10"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK10"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK10"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_11; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK11"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK11"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK11"); ?>
              </a>
            </li>
            <li>
              <a class="externalLink external toolTips" 
                 href="<?php echo LINK_FOOTER_12; ?>" 
                 title="<?php printLgFileText("SITE_FOOTER_LINK12"); ?>" 
                 rel="<?php printLgFileText("SITE_DESC_FOOTER_LINK12"); ?>">
                 <?php printLgFileText("SITE_FOOTER_LINK12"); ?>
              </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>

    <!-- Footer hidden -->
    <div id="footerLHidden">
    <div id="footerLHiddenIn">
      <a id="footerLinkSlideIn" 
         href="#" 
         class="openImg toolTips" 
         title="<?php printLgFileText("SITE_NAME2"); ?>" 
         rel="<?php printLgFileText("OPEN_PANEL"); ?>">
      </a>
      </div>
    </div>
