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

  /**
   * TEST Set language
   */
  function testSetLanguage($lg="")
  {
    $this->assertEqual(0, 0);
  }

  /**
   * TEST Get language
   */
  function testGetLanguage()
  {
    $this->assertEqual(0, 0);
  }

  /**
   * Get language file
   */
  function testGetLanguageFile($lg="")
  {
    $this->assertEqual(0, 0);
  }

  /**
   * 
   */
  function testGetLgFileText()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }

  /**
   *
   */
  function testPrintLgFileText()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }

  /**
   * Get language file text for url
   */
  function testGetLgFileTextForUrl()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }

  /**
   * testGetPageUrlForLanguage
   */
  function testGetPageUrlForLanguage()
  {
    $this->assertEqual(0, 0);
  }

  // URL //////////////////////////////////////////////////////////////////////
  /**
   * curPageURL
   */
  function testCurPageURL()
  {
    $this->assertEqual(0, 0);
  }

  /**
   * Get meta title
   */
  function testGetMetaTitle()
  {
    $this->assertEqual(0, 0);
  }


  // MENU /////////////////////////////////////////////////////////////////////
  /**
   * TEST Build menu
   */
  function testBuildMenu()
  {
    $this->assertEqual(0, 0);
  }

  // CONTENT //////////////////////////////////////////////////////////////////
  /**
   * Print content
   */
  function testPrintContent()
  {
    $filename = "";
    $this->assertEqual(0, 0);
  }

  /**
   * setMetaDescription
   */
  function testSetMetaDescription()
  {
    $filename = "";
    $metaDesc = "";
    $this->assertEqual(0, 0);
  }


  /**
   * setMetaKeywords
   */
  function testSetMetaKeywords()
  {
    $filename = "";
    $metaKey = "";
    $this->assertEqual(0, 0);
  }



  // DOCUMENTATION ////////////////////////////////////////////////////////////
  /**
   * Get documentation link, according to user language
   */
  function testGetDocumentationLink()
  {
    $this->assertEqual(0, 0);
  }


  // MAINTENANCE //////////////////////////////////////////////////////////////
  /**
   * TEST Is the site under maintenance?
   */
  function testIsMaintenance()
  {
    $maintenance = "";
    $this->assertEqual(0, 0);
  }


  // ERRORS MANAGEMENT ////////////////////////////////////////////////////////
  /**
   * TEST Add errors
   */
  function testAddErrors()
  {
    $title = "";
    $msg = "";
    $this->assertEqual(0, 0);
  }

  /**
   * TEST Show errors
   */
  function testShowErrors()
  {
    $this->assertEqual(0, 0);
  }


  // GRAVATAR /////////////////////////////////////////////////////////////////
  /**
   * TEST
   * Get either a Gravatar URL or complete image tag for a specified 
   * email address.
   *
   * @param string $email The email address
   * @param string $s Size in pixels, defaults to 80px [ 1 - 512 ]
   * @param string $d Default imageset to use 
   * [ 404 | mm | identicon | monsterid | wavatar]
   * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
   * @param boole $img True to return a complete IMG tag False for just the URL
   * @param array $atts Optional, additional key/value attributes to include 
   * in the IMG tag
   * @return String containing either just a URL or a complete image tag
   * @source http://gravatar.com/site/implement/images/php/
   */
  function testGetGravatar()
  {
    $email = "";
    $s = 80;
    $d = 'mm';
    $r = 'g';
    $img = false;
    $atts = array();
    $this->assertEqual(0, 0);
  }

  /**
   * TEST println
   */
  function testPrintln()
  {
    $string_message = "";
    $this->assertEqual(0, 0);
  }
}
?>
