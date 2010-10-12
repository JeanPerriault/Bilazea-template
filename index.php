<?php
///////////////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * index.php
 * 
 * Description:
 * This file contains code
 * - to initialize php ini
 * - to start php session
 * - to set html header
 * - to choose between site/maintenance template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web 
 */
///////////////////////////////////////////////////////////////////////////////////////

  // INIT
  $init = ini_set('session.use_trans_sid','0');

  // SESSION
  session_start();
  header('Content-Type: text/html; Charset=UTF-8');

  // MAINTENANCE
  $maintenanceTag = false;

  // SITE
  include('./inc/maintenance.php');
  include('./inc/init.php');

  if ($maintenance){
    include(LINK_TPL_MAINTENANCE);
  }
  else{
    include(LINK_TPL_SITE);
  }
?>
