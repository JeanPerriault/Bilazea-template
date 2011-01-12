<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_content.php
 * 
 * Description:
 * This file contains code
 * - to load content of the site
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

  // Get content //////////////////////////////////////////////////////////////
  if (!isset($_GET[getLgFileText("CONTENT")]))
  {
    printContent(LINK_CNT_CAT_0);
  }
  else
  {
    $content = $_GET[getLgFileText("CONTENT")];
  }
  $cat0 = getLgFileTextForUrl("CAT_0");
  $cat1 = getLgFileTextForUrl("CAT_1");
  $cat2 = getLgFileTextForUrl("CAT_2");
  $cat3 = getLgFileTextForUrl("CAT_3");
  $cat4 = getLgFileTextForUrl("CAT_4");

  // Categories ///////////////////////////////////////////////////////////////
  // Category 0 - Home
  if ($content == $cat0)
  {
    printContent(LINK_CNT_CAT_0);
  }

  // Category 1
  if ($content == $cat1)
  {
    printContent(LINK_CNT_CAT_1);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_1"))
  {
  	printContent(LINK_CNT_CAT_1_1);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_2"))
  {
  	printContent(LINK_CNT_CAT_1_2);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_3"))
  {
  	printContent(LINK_CNT_CAT_1_3);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_4"))
  {
  	printContent(LINK_CNT_CAT_1_4);
  }

  // Category 2
  if ($content == $cat2)
  {
    printContent(LINK_CNT_CAT_2);
  }
  if ($content == $cat2.">".getLgFileTextForUrl("CAT_2_1"))
  {
    printContent(LINK_CNT_CAT_2_1);
  }
  if ($content == $cat2.">".getLgFileTextForUrl("CAT_2_2"))
  {
    printContent(LINK_CNT_CAT_2_2);
  }
  if ($content == $cat2.">".getLgFileTextForUrl("CAT_2_3"))
  {
    printContent(LINK_CNT_CAT_2_3);
  }

  // Category 3
  if ($content == $cat3)
  {
    printContent(LINK_CNT_CAT_3);
  }
  if ($content == $cat3.">".getLgFileTextForUrl("CAT_3_1"))
  {
    printContent(LINK_CNT_CAT_3_1);
  }
  if ($content == $cat3.">".getLgFileTextForUrl("CAT_3_2"))
  {
    printContent(LINK_CNT_CAT_3_2);
  }

  // Category 4
  if ($content == $cat4)
  {
    printContent(LINK_CNT_CAT_4);
  }
  /*
  if ($content == $cat4.">".getLgFileTextForUrl("CAT_4_1"))
  {
    printContent(LINK_CNT_CAT_4_1);
  }
  if ($content == $cat4.">".getLgFileTextForUrl("CAT_4_2"))
  {
    printContent(LINK_CNT_CAT_4_1);
  }
  */
  /////////////////////////////////////////////////////////////////////////////
?>
