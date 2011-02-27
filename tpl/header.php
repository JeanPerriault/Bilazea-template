<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/header.php
 * 
 * Description:
 * This file contains code of header site
 * 
 * Date:
 * 2010/10/10
 * R1: 2011/01/10
 * R2: 2011/02/27
 * 
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>

<!-- HEAD -->
<head>
  <!-- META -->
  <?php echo META_CONTENT."\n" ?>
  <?php echo META_CONTENT_ROBOT."\n" ?>
  <?php echo META_CONTENT_DESC."\n" ?>
  <?php echo META_CONTENT_KEY."\n" ?>
  <?php echo META_LINK_RSS."\n" ?>
  <?php echo META_LINK_ATOM."\n" ?>

  <!-- TITLE -->
  <title><?php echo getMetaTitle(); ?></title>

  <!-- FAVICON -->
  <link rel="shortcut icon" 
        type="image/x-icon" href="<?php echo LINK_FAVICON ?>" />
  <link rel="apple-touch-icon" href="<?php echo LINK_APPLE_ICON ?>" />

  <!-- BASE CSS -->
  <link rel="stylesheet" href="<?php echo LINK_CSS_BILA_SUPP ?>" 
        type="text/css" media="projection, screen, tv" />
  <link rel="stylesheet" href="<?php echo LINK_CSS_BILA_BASE ?>" 
        type="text/css" media="projection, screen, tv" />

  <!-- TEMPLATE CSS -->
  <link rel="stylesheet" href="<?php echo LINK_CSS_BILA_PERS ?>" 
        type="text/css" media="projection, screen, tv" />
  <link rel="stylesheet" href="<?php echo LINK_CSS_BILA_PERS_LINKS ?>" 
        type="text/css" media="projection, screen, tv" />
  <link rel="stylesheet" href="<?php echo LINK_CSS_BILA_PERS_MTL ?>" 
        type="text/css" media="projection, screen, tv" />

  <!-- TEMPLATE CONTENT CSS -->
  <link rel="stylesheet" href="<?php echo LINK_CSS_BILA_PERS_CNT ?>" 
        type="text/css" media="projection, screen, tv" />

</head>
