<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tst/utest_utils.php
 * 
 * Description:
 * This file contains code
 * - to test unitarily utils functions used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web 
 */
///////////////////////////////////////////////////////////////////////////////

require_once('./simpletest/autorun.php');
require_once('../inc/utils.php');

class TestOfUnits extends UnitTestCase {

  function testGetPageUrlForLanguage()
  {
    // Set up
    $lg = "fr";
    define(LINK_LANG,dirname(__FILE__) . "/../inc/lang/fr.lng");
    $urlEx = "test";

    // Test
    $url = getPageUrlForLanguage($lg);
    $this->assertEqual($x, $url);
  }
}
?>
