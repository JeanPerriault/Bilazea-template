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
 * R1: 2011/01/10
 * R2: 2011/02/27
 * 
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

require_once('./simpletest/autorun.php');
require_once('../inc/utils.php');


// Test of setLanguage
class TestSetLanguage extends UnitTestCase
{
  /**
   * TEST Set language
   */
  function testSetLanguage_00($lg="")
  {
    $this->assertEqual(0, 0);
  }

  function testSetLanguage_01($lg="")
  {
    $this->assertEqual(1, 1);
  }
}


// Test of getLanguage
class TestGetLanguage extends UnitTestCase
{
  /**
   * TEST Get language
   */
  function testGetLanguage_00()
  {
    $this->assertEqual(0, 0);
  }

  function testGetLanguage_01()
  {
    $this->assertEqual(1, 1);
  }
}


// Test of getLanguageFile
class testGetLanguageFile extends UnitTestCase
{
  /**
   * Get language file
   */
  function testGetLanguageFile_00($lg="")
  {
    $this->assertEqual(0, 0);
  }

  function testGetLanguageFile_01($lg="")
  {
    $this->assertEqual(0, 0);
  }
}


// Test of getLgFileText
class TestGetLgFileText extends UnitTestCase
{
  /**
   * 
   */
  function testGetLgFileText_00()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }

  function testGetLgFileText_01()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }
}


// Test of printLgFileText
class TestPrintLgFileText extends UnitTestCase
{
  /**
   *
   */
  function testPrintLgFileText_00()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }
}


// Test of getLgFileTextForUrl
class TestGetLgFileTextForUrl extends UnitTestCase
{
  /**
   * Get language file text for url
   */
  function testGetLgFileTextForUrl_00()
  {
    $key = "";
    $lg = "";
    $this->assertEqual(0, 0);
  }
}


// Test of getPageUrlForLanguage
class TestGetPageUrlForLanguage extends UnitTestCase
{
  /**
   * testGetPageUrlForLanguage
   */
  function testGetPageUrlForLanguage_00()
  {
    $this->assertEqual(0, 0);
  }
}


// Test of curPageURL
class TestCurPageURL extends UnitTestCase
{
  /**
   * curPageURL
   */
  function testCurPageURL_00()
  {
    $this->assertEqual(0, 0);
  }
}


// Test of getMetaTitle
class TestGetMetaTitle extends UnitTestCase
{
  /**
   * Get meta title
   */
  function testGetMetaTitle_00()
  {
    $this->assertEqual(0, 0);
  }
}


// Test of buildAndPrintMenu
class TestBuildAndPrintMenu extends UnitTestCase
{
  /**
   * TEST Build menu
   */
  function testBuildMenu_00()
  {
    $this->assertEqual(0, 0);
  }
}


// Test of printContent
class TestPrintContent extends UnitTestCase
{
  /**
   * Print content
   */
  function testPrintContent_00()
  {
    $filename = "";
    $this->assertEqual(0, 0);
  }
}


// Test of setMetaDescription
class TestSetMetaDescription extends UnitTestCase
{
  /**
   * setMetaDescription
   */
  function testSetMetaDescription_00()
  {
    $filename = "";
    $metaDesc = "";
    $this->assertEqual(0, 0);
  }
}


// Test of setMetaKeywords
class TestSetMetaKeywords extends UnitTestCase {

  /**
   * setMetaKeywords
   */
  function testSetMetaKeywords_00()
  {
    $filename = "";
    $metaKey = "";
    $this->assertEqual(0, 0);
  }
}


// Test of getDocumentationLink
class TestGetDocumentationLink extends UnitTestCase {
  /**
   * Get documentation link, according to user language
   */
  function testGetDocumentationLink_00()
  {
    $this->assertEqual(0, 0);
  }
}


// Test of IsMaintenance
class TestIsMaintenance extends UnitTestCase
{
  /**
   * TEST Is the site under maintenance?
   */
  function testIsMaintenance_00()
  {
    $maintenance = "";
    $this->assertEqual(0, 0);
  }
}


// Test of addErrors
class TestAddErrors extends UnitTestCase
{
  /**
   * TEST Add errors
   */
  function testAddErrors_00()
  {
    $title = "";
    $msg = "";
    $this->assertEqual(0, 0);
  }
}


// Test of showErrors
class TestShowErrors extends UnitTestCase
{
  /**
   * TEST Show errors
   */
  function testShowErrors_00()
  {
    $this->assertEqual(0, 0);
  }

  function testShowErrors_01()
  {
    $this->assertEqual(0, 0);
  }
}


// Test of getGravatar
class TestGetGravatar extends UnitTestCase
{
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
  function testGetGravatar_00()
  {
    $email = "";
    $s = 80;
    $d = 'mm';
    $r = 'g';
    $img = false;
    $atts = array();
    $this->assertEqual(0, 0);
  }

  function testGetGravatar_01()
  {
    $email = "";
    $s = 80;
    $d = 'mm';
    $r = 'g';
    $img = false;
    $atts = array();
    $this->assertEqual(0, 0);
  }
}


// Test of println
class TestPrintln extends UnitTestCase
{
  /**
   * TEST println
   */
  function testPrintln_00()
  {
    $string_message = "";
    $this->assertEqual(0, 0);
  }

  function testPrintln_01()
  {
    $string_message = "";
    $this->assertEqual(0, 0);
  }
}
?>
