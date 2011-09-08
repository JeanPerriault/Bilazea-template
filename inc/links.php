<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * inc/links.php
 * 
 * Description:
 * This file contains code
 * - to set language used in Bilazea template
 * - to define and initialize variables used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * R1: 2011/01/10
 * R2: 2011/02/27
 * R3: 2011/05/15
 * 
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

  /////////////////////////////////////////////////////////////////////////////
  // GENERAL LINKS
  define(LINK_WEBSITE,             $link_website);
  define(LINK_FAVICON,             LINK_WEBSITE.'favicon.ico');
  define(LINK_APPLE_ICON,          LINK_WEBSITE.'apple_icon.png');
  define(LINK_DIRECTORY_CSS,       LINK_WEBSITE.'css/');
  define(LINK_DIRECTORY_IMG,       LINK_WEBSITE.'img/');
  define(LINK_DIRECTORY_JS,        LINK_WEBSITE.'js/');
  define(LINK_DIRECTORY_TPL,       './tpl/');
  define(LINK_DIRECTORY_DOC,       './doc/');
  define(LINK_DIRECTORY_TPL_ERROR, LINK_DIRECTORY_TPL.'err/');
  define(LINK_DIRECTORY_CNT,       './cnt/');
  define(LINK_DIRECTORY_TOOLS,     './tools/');

  // CSS bilazea base and supp
  define(LINK_CSS_BILA_BASE,       LINK_DIRECTORY_CSS.'base/bilazea_base.css');
  define(LINK_CSS_BILA_SUPP,       LINK_DIRECTORY_CSS.'base/bilazea_supp.css');

  define(LINK_CSS_BILA_PERS,       LINK_DIRECTORY_CSS.'bilazea.css');
  define(LINK_CSS_BILA_PERS_CNT,   LINK_DIRECTORY_CSS.'bilazea_cnt.css');
  define(LINK_CSS_BILA_PERS_LINKS, LINK_DIRECTORY_CSS.'bilazea_links.css');
  define(LINK_CSS_BILA_PERS_MTL,   LINK_DIRECTORY_CSS.'bilazea_mootools.css');

  // JS
  define(LINK_MT_CORE,             LINK_DIRECTORY_JS.'mootools-core.js');
  define(LINK_MT_MORE,             LINK_DIRECTORY_JS.'mootools-more.js');
  define(LINK_MT_BILAZEA,          LINK_DIRECTORY_JS.'bilazea.js');
  define(LINK_REFLECTION,          LINK_DIRECTORY_TOOLS.'reflection/reflection.js');
  define(LINK_GOOGLE,              LINK_DIRECTORY_TOOLS.'google/google.js');
  define(LINK_IECSSHACK,           LINK_DIRECTORY_TOOLS.'iecsshack/curvycorners.js');
  define(LINK_SLIMBOX_CSS,         LINK_DIRECTORY_TOOLS.'slimbox/css/slimbox.css');
  define(LINK_SLIMBOX,             LINK_DIRECTORY_TOOLS.'slimbox/js/slimbox.js');
  define(LINK_SLIMBOX,             LINK_DIRECTORY_TOOLS.'slimbox/js/slimbox.js');
  define(LINK_ZEROCPBOARD,         LINK_DIRECTORY_TOOLS.'zeroclipboard/zeroclipboard.js');
  define(LINK_ADDTHIS,             "http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e4049d62b7f16ca");

  // SITE
  define(LINK_HEADER,              LINK_DIRECTORY_TPL.'header.php');
  define(LINK_TPL_SITE,            LINK_DIRECTORY_TPL.'site.php');
  define(LINK_HEAD,                LINK_DIRECTORY_TPL.'site_head.php');
  define(LINK_SETTINGS,            LINK_DIRECTORY_TPL.'site_settings.php');
  define(LINK_NAVIGATION,          LINK_DIRECTORY_TPL.'site_navigation.php');
  define(LINK_LASTMOST,            LINK_DIRECTORY_TPL.'site_lastmost.php');
  define(LINK_FOOTER,              LINK_DIRECTORY_TPL.'site_footer.php');
  define(LINK_FOOTER_L,            LINK_DIRECTORY_TPL.'site_footer_links.php');
  define(LINK_MAP,                 LINK_DIRECTORY_TPL.'site_map.php');
  define(LINK_JAVASCRIPT,          LINK_DIRECTORY_TPL.'javascript.php');

  // MAINTENANCE
  define(LINK_MAINTENANCE,         LINK_DIRECTORY_TPL.'site_maintenance.php');

  // ERROR PAGES
  define(LINK_PAGE_ERR_400,        LINK_DIRECTORY_TPL_ERROR.'400.html');
  define(LINK_PAGE_ERR_401,        LINK_DIRECTORY_TPL_ERROR.'401.html');
  define(LINK_PAGE_ERR_403,        LINK_DIRECTORY_TPL_ERROR.'403.html');
  define(LINK_PAGE_ERR_404,        LINK_DIRECTORY_TPL_ERROR.'404.html');
  define(LINK_PAGE_ERR_500,        LINK_DIRECTORY_TPL_ERROR.'500.html');

  // DOCUMENTATION
  define(LINK_INTERNAL_DOC_FR,     LINK_DIRECTORY_DOC.'index_fr.html');
  define(LINK_INTERNAL_DOC_EN,     LINK_DIRECTORY_DOC.'index_en.html');
  define(LINK_INTERNAL_DOC_ES,     LINK_DIRECTORY_DOC.'index_es.html');

  // IMG
  define(LINK_IMG_MAINTENANCE,     LINK_WEBSITE.'img/maintenance.jpg');

  // NAVIGATION ///////////////////////////////////////////////////////////////
  define(LINK_INDEX,               LINK_WEBSITE.'index.php?');
  include("links_cnt.php");
?>
