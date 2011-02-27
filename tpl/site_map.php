<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site_map.php
 * 
 * Description:
 * This file contains code
 * - display map site
 * - TODO: build map site
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

<h1><?php printLgFileText("MAP"); ?></h1>

<ul>
  <li><a href="<?php echo LINK_CAT_0; ?>"><?php printLgFileText("CAT_0"); ?></a></li>

  <li><a href="<?php echo LINK_CAT_1; ?>"><?php printLgFileText("CAT_1"); ?></a>
    <ul>
      <li><a href="<?php echo LINK_CAT_1_1; ?>"><?php printLgFileText("CAT_1_1"); ?></a></li>
      <li><a href="<?php echo LINK_CAT_1_2; ?>"><?php printLgFileText("CAT_1_2"); ?></a></li>
      <li><a href="<?php echo LINK_CAT_1_3; ?>"><?php printLgFileText("CAT_1_3"); ?></a></li>
      <li><a href="<?php echo LINK_CAT_1_4; ?>"><?php printLgFileText("CAT_1_4"); ?></a></li>  
    </ul>
  </li>

  <li><a href="<?php echo LINK_CAT_2; ?>"><?php printLgFileText("CAT_2"); ?></a>
    <ul>
      <li><a href="<?php echo LINK_CAT_2_1; ?>"><?php printLgFileText("CAT_2_1"); ?></a></li>
      <li><a href="<?php echo LINK_CAT_2_2; ?>"><?php printLgFileText("CAT_2_2"); ?></a></li>
      <li><a href="<?php echo LINK_CAT_2_3; ?>"><?php printLgFileText("CAT_2_3"); ?></a></li>
    </ul>
  </li>

  <li><a href="<?php echo LINK_CAT_3; ?>"><?php printLgFileText("CAT_3"); ?></a>
    <ul>
      <li><a href="<?php echo LINK_CAT_3_1; ?>"><?php printLgFileText("CAT_3_1"); ?></a></li>
      <li><a href="<?php echo LINK_CAT_3_2; ?>"><?php printLgFileText("CAT_3_2"); ?></a></li>
    </ul>
  </li>

  <li><a href="<?php echo LINK_CAT_4; ?>"><?php printLgFileText("CAT_4"); ?></a></li>
</ul>
