<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_navigation.php
 * 
 * Description:
 * This file contains code
 * - to build menu and submenu
 * - to display them 
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

  // Build menu
  $menuArray = buildMenu();

  // Navigation ///////////////////////////////////////////////////////////////
  echo $menuArray[0];
  $contents = explode('>', $_GET[getLgFileText("CONTENT")]);

  // Navigation 1 /////////////////////////////////////////////////////////////
  if ($_GET[getLgFileText("CONTENT")] == getLgFileTextForUrl("CAT_1") 
      || $contents[0] == getLgFileTextForUrl("CAT_1")){
    echo $menuArray[1];
  }

  // Navigation 2 /////////////////////////////////////////////////////////////
  if ($_GET[getLgFileText("CONTENT")] == getLgFileTextForUrl("CAT_2") 
      || $contents[0] == getLgFileTextForUrl("CAT_2")){
    echo $menuArray[2];
  }

  // Navigation 3 /////////////////////////////////////////////////////////////
  if ($_GET[getLgFileText("CONTENT")] == getLgFileTextForUrl("CAT_3") 
      || $contents[0] == getLgFileTextForUrl("CAT_3")){
    echo $menuArray[3];
  }

  // Navigation 4 /////////////////////////////////////////////////////////////
  if ($_GET[getLgFileText("CONTENT")] == getLgFileText("CAT_4") 
      || $contents[0] == getLgFileTextForUrl("CAT_4")){
    echo $menuArray[4];
  }

?>
