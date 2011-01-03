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
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

  /////////////////////////////////////////////////////////////////////////////
  // GENERAL LINKS
  define(LINK_WEBSITE,            'http://localhost/Bilazea-template/');
  define(LINK_FAVICON,             LINK_WEBSITE.'favicon.ico');
  define(LINK_DIRECTORY_CSS,       LINK_WEBSITE.'css/');
  define(LINK_DIRECTORY_IMG,       LINK_WEBSITE.'img/');
  define(LINK_DIRECTORY_JS,        LINK_WEBSITE.'js/');
  define(LINK_DIRECTORY_TPL,       './tpl/');
  define(LINK_DIRECTORY_DOC,       './doc/');
  define(LINK_DIRECTORY_TPL_ERROR, LINK_DIRECTORY_TPL.'err/');
  define(LINK_DIRECTORY_CNT,       './cnt/');
  define(LINK_DIRECTORY_TOOLS,     './tools/');

  // CSS bilazea base and supp
  define(LINK_CSS_BILA_BASE,       LINK_DIRECTORY_CSS.'bilazea_base.css');
  define(LINK_CSS_BILA_SUPP,       LINK_DIRECTORY_CSS.'bilazea_supp.css');
  define(LINK_CSS_BILA_PERS,       LINK_DIRECTORY_CSS.'bilazea.css');
  define(LINK_CSS_BILA_PERS_LINKS, LINK_DIRECTORY_CSS.'bilazea_links.css');
  define(LINK_CSS_BILA_PERS_SETS,  LINK_DIRECTORY_CSS.'bilazea_settings.css');
  define(LINK_CSS_BILA_PERS_CNT,   LINK_DIRECTORY_CSS.'bilazea_cnt.css');
  define(LINK_CSS_CAROUSEL,        LINK_DIRECTORY_TOOLS.'carousel/ImageCarousel.css');

  // JS
  define(LINK_MT_CORE,             LINK_DIRECTORY_JS.'mootools-core.js');
  define(LINK_MT_MORE,             LINK_DIRECTORY_JS.'mootools-more.js');
  define(LINK_MT_BILAZEA,          LINK_DIRECTORY_JS.'bilazea.js');
  define(LINK_REFLECTION,          LINK_DIRECTORY_JS.'reflection.js');
  define(LINK_GOOGLE,              LINK_DIRECTORY_JS.'google.js');
  define(LINK_CAROUSEL,            LINK_DIRECTORY_TOOLS.'carousel/ImageCarousel.js');

  // SITE
  define(LINK_HEADER,          LINK_DIRECTORY_TPL.'header.php');
  define(LINK_TPL_SITE,        LINK_DIRECTORY_TPL.'site.php');
  define(LINK_HEAD,            LINK_DIRECTORY_TPL.'site_head.php');
  define(LINK_SETTINGS,        LINK_DIRECTORY_TPL.'site_settings.php');
  define(LINK_NAVIGATION,      LINK_DIRECTORY_TPL.'site_navigation.php');
  define(LINK_LASTMOST,        LINK_DIRECTORY_TPL.'site_lastmost.php');
  define(LINK_CONTENT,         LINK_DIRECTORY_TPL.'site_content.php');
  define(LINK_ASIDE,           LINK_DIRECTORY_TPL.'site_aside.php');
  define(LINK_FOOTER,          LINK_DIRECTORY_TPL.'site_footer.php');
  define(LINK_MAP,             LINK_DIRECTORY_TPL.'site_map.php');
  define(LINK_JAVASCRIPT,      LINK_DIRECTORY_TPL.'javascript.php');

  // MAINTENANCE
  define(LINK_MAINTENANCE,     LINK_DIRECTORY_TPL.'site_maintenance.php');

  // ERROR PAGES
  define(LINK_PAGE_ERR_400,    LINK_DIRECTORY_TPL_ERROR.'400.html');
  define(LINK_PAGE_ERR_401,    LINK_DIRECTORY_TPL_ERROR.'401.html');
  define(LINK_PAGE_ERR_403,    LINK_DIRECTORY_TPL_ERROR.'403.html');
  define(LINK_PAGE_ERR_404,    LINK_DIRECTORY_TPL_ERROR.'404.html');
  define(LINK_PAGE_ERR_500,    LINK_DIRECTORY_TPL_ERROR.'500.html');

  // DOCUMENTATION
  define(LINK_INTERNAL_DOC_FR, LINK_DIRECTORY_DOC.'index_fr.html');
  define(LINK_INTERNAL_DOC_EN, LINK_DIRECTORY_DOC.'index_en.html');
  define(LINK_INTERNAL_DOC_ES, LINK_DIRECTORY_DOC.'index_es.html');

  // IMG
  define(LINK_IMG_MAINTENANCE, LINK_WEBSITE.'img/maintenance.jpg');

  // NAVIGATION ///////////////////////////////////////////////////////////////
  define(LINK_INDEX,           LINK_WEBSITE.'index.php?');

  // CONTENT //////////////////////////////////////////////////////////////////
  define(LINK_CNT_CAT_0,       LINK_DIRECTORY_CNT.'category_0/category_0.html');
  define(LINK_CNT_CAT_0_MOD_0, LINK_DIRECTORY_CNT.'category_0/module_0.php');
  define(LINK_CNT_CAT_0_MOD_1, LINK_DIRECTORY_CNT.'category_0/module_1.php');

  define(LINK_CNT_CAT_1,    LINK_DIRECTORY_CNT.'category_1/category_1.html');
  define(LINK_CNT_CAT_1_1,  LINK_DIRECTORY_CNT.'category_1/category_1_1.html');
  define(LINK_CNT_CAT_1_2,  LINK_DIRECTORY_CNT.'category_1/category_1_2.html');
  define(LINK_CNT_CAT_1_3,  LINK_DIRECTORY_CNT.'category_1/category_1_3.html');
  define(LINK_CNT_CAT_1_4,  LINK_DIRECTORY_CNT.'category_1/category_1_4.html');

  define(LINK_CNT_CAT_2,    LINK_DIRECTORY_CNT.'category_2/category_2.html');
  define(LINK_CNT_CAT_2_1,  LINK_DIRECTORY_CNT.'category_2/category_2_1.html');
  define(LINK_CNT_CAT_2_2,  LINK_DIRECTORY_CNT.'category_2/category_2_2.html');
  define(LINK_CNT_CAT_2_3,  LINK_DIRECTORY_CNT.'category_2/category_2_3.html');

  define(LINK_CNT_CAT_3,    LINK_DIRECTORY_CNT.'category_3/category_3.html');
  define(LINK_CNT_CAT_3_1,  LINK_DIRECTORY_CNT.'category_3/category_3_1.html');
  define(LINK_CNT_CAT_3_2,  LINK_DIRECTORY_CNT.'category_3/category_3_2.html');

  define(LINK_CNT_CAT_4,    LINK_DIRECTORY_CNT.'category_4/category_4.html');
  define(LINK_CNT_CAT_4_1,  LINK_DIRECTORY_CNT.'category_4/category_4_1.html');

  // EXTERNAL LINKS ///////////////////////////////////////////////////////////
  define(FOOTER_LINK1,      'http://bilazea.com');
  define(FOOTER_LINK2,      'http://example_link2.com');
  define(FOOTER_LINK3,      'http://example_link3.com');
  define(FOOTER_LINK4,      'http://example_link4.com');
  define(FOOTER_LINK5,      'http://example_link5.com');

  define(FOOTER_LINK6,      'http://mootools.net');
  define(FOOTER_LINK7,      'http://www.digitalia.be/software/reflectionjs-for-mootools');
  define(FOOTER_LINK8,      'http://www.aptana.com/');

  define(FOOTER_LINK9,      'http://www.viadeo.com/profile/002eby7dzdsncl1/');
  define(FOOTER_LINK10,     'http://www.linkedin.com/profile/view?id=39176760');
  define(FOOTER_LINK11,     'https://github.com/JeanPerriault');
  define(FOOTER_LINK12,     'http://twitter.com/#!/jeanperriault');

  define(LINK_WIKI_DOC,     'https://github.com/JeanPerriault/Bilazea-template/wiki');

  // MAIL TO //////////////////////////////////////////////////////////////////
  define(MAILTO_ADMIN,      'mailto:bilazea@aol.fr');
?>
