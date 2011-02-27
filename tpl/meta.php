<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/meta.php
 * 
 * Description:
 * This file contains code
 * - to load meta of the site
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

  // Get content //////////////////////////////////////////////////////////////
  if (!isset($_GET[getLgFileText("CONTENT")]))
  {
    setMetaDescription(LINK_CNT_CAT_0);
    setMetaKeywords(LINK_CNT_CAT_0);
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
    setMetaDescription(LINK_CNT_CAT_0);
    setMetaKeywords(LINK_CNT_CAT_0);
  }

  // Category 1
  if ($content == $cat1)
  {
    setMetaDescription(LINK_CNT_CAT_1);
    setMetaKeywords(LINK_CNT_CAT_1);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_1"))
  {
    setMetaDescription(LINK_CNT_CAT_1_1);
    setMetaKeywords(LINK_CNT_CAT_1_1);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_2"))
  {
    setMetaDescription(LINK_CNT_CAT_1_2);
    setMetaKeywords(LINK_CNT_CAT_1_2);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_3"))
  {
    setMetaDescription(LINK_CNT_CAT_1_3);
    setMetaKeywords(LINK_CNT_CAT_1_3);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_4"))
  {
    setMetaDescription(LINK_CNT_CAT_1_4);
    setMetaKeywords(LINK_CNT_CAT_1_4);
  }
  if ($content == $cat1.">".getLgFileTextForUrl("CAT_1_5"))
  {
    setMetaDescription(LINK_CNT_CAT_1_5);
    setMetaKeywords(LINK_CNT_CAT_1_5);
  }

  // Category 2
  if ($content == $cat2)
  {
    setMetaDescription(LINK_CNT_CAT_2);
    setMetaKeywords(LINK_CNT_CAT_2);
  }
  if ($content == $cat2.">".getLgFileTextForUrl("CAT_2_1"))
  {
    setMetaDescription(LINK_CNT_CAT_2_1);
    setMetaKeywords(LINK_CNT_CAT_2_1);
  }
  if ($content == $cat2.">".getLgFileTextForUrl("CAT_2_2"))
  {
    setMetaDescription(LINK_CNT_CAT_2_2);
    setMetaKeywords(LINK_CNT_CAT_2_2);
  }
  if ($content == $cat2.">".getLgFileTextForUrl("CAT_2_3"))
  {
    setMetaDescription(LINK_CNT_CAT_2_3);
    setMetaKeywords(LINK_CNT_CAT_2_3);
  }

  // Category 3
  if ($content == $cat3)
  {
    setMetaDescription(LINK_CNT_CAT_3);
    setMetaKeywords(LINK_CNT_CAT_3);
  }
  if ($content == $cat3.">".getLgFileTextForUrl("CAT_3_1"))
  {
    setMetaDescription(LINK_CNT_CAT_3_1);
    setMetaKeywords(LINK_CNT_CAT_3_1);
  }
  if ($content == $cat3.">".getLgFileTextForUrl("CAT_3_2"))
  {
    setMetaDescription(LINK_CNT_CAT_3_2);
    setMetaKeywords(LINK_CNT_CAT_3_2);
  }

  // Category 4
  if ($content == $cat4)
  {
    setMetaDescription(LINK_CNT_CAT_4);
    setMetaKeywords(LINK_CNT_CAT_4);
  }
  /*
  if ($content == $cat4.">".getLgFileTextForUrl("CAT_4_1"))
  {
    setMetaDescription(LINK_CNT_CAT_4_1);
    setMetaKeywords(LINK_CNT_CAT_4_1);
  }
  if ($content == $cat4.">".getLgFileTextForUrl("CAT_4_2"))
  {
    setMetaDescription(LINK_CNT_CAT_4_2);
    setMetaKeywords(LINK_CNT_CAT_4_2);
  }
  */

  if ($content == getLgFileText("MAP"))
  {
    setMetaDescription('','Bilazea.com template, '.getLgFileText("MAP"));
    setMetaKeywords('','Bilazea.com template, '.getLgFileText("MAP"));
  }


  
  /////////////////////////////////////////////////////////////////////////////
?>
