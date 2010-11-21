<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * inc/utils.php
 * 
 * Description:
 * This file contains php functions used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

  /**
   * Set language
   * 
   * @param $lg
   */
  function setLanguage($lg="")
  {
    // Define language constant
    define(LG_FR, 'fr');
    define(LG_EN, 'en');
    define(LG_ES, 'es');
    define(LANG_FR, 'Français');
    define(LANG_EN, 'English');
    define(LANG_ES, 'Español');
    define(ERROR_400, "Error400");
    define(ERROR_401, "Error401");
    define(ERROR_403, "Error403");
    define(ERROR_404, "Error404");
    define(ERROR_500, "Error500");

    // Get curl page url and find index.php pattern
    $url = curPageURL();
    $find = 'index.php';
    $pos = strpos($url, $find);

    // If first session variable isn't set, use this code to define
    // language and if there's index.php in the url.
    // (For example if someone use a localized bookmark)
    if (!isset($_SESSION['first']) && $pos != false)
    {
      // Retrieve name of url parameter.
      // Find which language file contains that parameter name, 
      // and set language.
      $urlExplode = explode('?', $url);
      $paramExplode = explode('=', $urlExplode[1]);
      if ($paramExplode[0] == getLgFileText("CONTENT",LG_FR))
      {
        $lang = LG_FR;
      }
      else if ($paramExplode[0] == getLgFileText("CONTENT",LG_EN))
      {
        $lang = LG_EN;
      }
      else if ($paramExplode[0] == getLgFileText("CONTENT",LG_ES))
      {
        $lang = LG_ES;
      }
      $_SESSION['lg'] = $lang;
      $_SESSION['first']=false;
    }

    // If lg parameter is defined
    if($lg != "")
    {
      $lang = $lg;
      $_SESSION['lg'] = $lang;
    }
    // Else get POST stuff
    else if(isset($_POST['lg'])  && !empty($_POST['lg']))
    {
      if ($_POST['lg'] == LANG_FR)
      {
        $lang = LG_FR;
      }
      else if ($_POST['lg'] == LANG_EN)
      {
        $lang = LG_EN;
      }
      else if ($_POST['lg'] == LANG_ES)
      {
        $lang = LG_ES;
      }
      $_SESSION['lg'] = $lang;
    }
    // Else get SESSION stuff
    else if(isset($_SESSION['lg'])  && !empty($_SESSION['lg']))
    {
      $lang = $_SESSION['lg'];
    }
    // Else get GET stuff
    else if(isset($_GET['lg'])  && !empty($_GET['lg']))
    {
      $lang = $_GET['lg'];
      $_SESSION['lg'] = $lang;
    }
    // Else get default language (FR)
    else
    {
      $lang=LG_FR;
      $_SESSION['lg']=$lang;
    }

    // Define localized prolog, link to language file constant, 
    // and 'no value' constant
    if($lang == LG_FR)
    {
      define(PROLOG_HTML, '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'
                          .LG_FR.'" lang="'.LG_FR.'">');
      define(LINK_LANG,   './inc/lang/fr.lng');
      define(NO_VALUE,    "Problèmes de texte !");
    }
    else if($lang == LG_EN)
    {
      define(PROLOG_HTML, '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'
                          .LG_EN.'" lang="'.LG_EN.'">');
      define(LINK_LANG,   './inc/lang/en.lng');
      define(NO_VALUE,    "Text problems !");
    }
    else if($lang == LG_ES)
    {
      define(PROLOG_HTML, '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'
                          .LG_ES.'" lang="'.LG_ES.'">');
      define(LINK_LANG,   './inc/lang/es.lng');
      define(NO_VALUE,    "Problemas de texto !");
    }
  }


  /**
   * Get language
   */
  function getLanguage()
  {
    $lg=LG_FR;
    if(isset($_GET['lg'])  && !empty($_GET['lg']))
    {
      $lg = $_GET['lg'];
    }
    else if(isset($_SESSION['lg'])  && !empty($_SESSION['lg']))
    {
      $lg = $_SESSION['lg'];
    }
    return $lg;
  }


  /**
   * Get documentation link, according to user language
   */
  function getDocumentationLink()
  {
    if (getLanguage() == LG_FR)
    {
      return LINK_INTERNAL_DOC_FR;
    }
    else if (getLanguage() == LG_EN)
    {
      return LINK_INTERNAL_DOC_EN;
    }
    else if (getLanguage() == LG_ES)
    {
      return LINK_INTERNAL_DOC_ES;
    }
  }


  /**
   * Is the site under maintenance?
   * 
   * @param $maintenance
   */
  function isMaintenance($maintenance)
  {
    $maintenanceTag = $maintenance;
    if(isset($_GET['maintenance']))
    {
      if ($_GET['maintenance'] == "true")
      {
        $maintenanceTag = true;
      }
      else $maintenanceTag = false;
    }
    return $maintenanceTag;
  }


  /**
   * Get language file text, parsing language file, 
   * excluding sections of .lng file
   * 
   * @param $key the key of text file
   * @param $lg the language of text file
   */
  function getLgFileText($key,$lg = "")
  {
    if ($lg != ""){
      if ($lg == LG_FR) $lang_array = parse_ini_file('./inc/lang/fr.lng');
      if ($lg == LG_EN) $lang_array = parse_ini_file('./inc/lang/en.lng');
      if ($lg == LG_ES) $lang_array = parse_ini_file('./inc/lang/es.lng');
    }
    else
    {
    $lang_array = parse_ini_file(LINK_LANG);      
    }
    if (array_key_exists($key, $lang_array))
    {
      return $lang_array[$key];
    }
    else
    {
      addErrors("<u>getLgFileText</u>", "No value for <b>".$key."</b>");
      return ST_EMPTY;
    }
  }


  /**
   * Get text, parsing language file, excluding sections of .lng file
   * + Print
   * 
   * @param $key
   * @param $lg
   */
  function printLgFileText($key,$lg = "")
  {
    if ($lg != ""){
      if ($lg == LG_FR) $lang_array = parse_ini_file('./inc/lang/fr.lng');
      if ($lg == LG_EN) $lang_array = parse_ini_file('./inc/lang/en.lng');
      if ($lg == LG_ES) $lang_array = parse_ini_file('./inc/lang/es.lng');
    }
    else
    {
    $lang_array = parse_ini_file(LINK_LANG);      
    }
    if (array_key_exists($key, $lang_array))
    {
      echo $lang_array[$key];
    }
    else
    {
      addErrors("<u>printLgFileText</u>", "No value for <b>".$key."</b>");
      echo NO_VALUE;
    }
  }


  /**
   * Get language file text for url
   * 
   * @param $key the key of text file
   * @param $lg the language of text file
   */
  function getLgFileTextForUrl($key,$lg = "")
  {
    if ($lg != ""){
      if ($lg == LG_FR) $lang_array = parse_ini_file('./inc/lang/fr.lng');
      if ($lg == LG_EN) $lang_array = parse_ini_file('./inc/lang/en.lng');
      if ($lg == LG_ES) $lang_array = parse_ini_file('./inc/lang/es.lng');
    }
    else
    {
    $lang_array = parse_ini_file(LINK_LANG);      
    }

    if (array_key_exists($key, $lang_array))
    {
      $a = str_replace(' ', '-', $lang_array[$key]);
      return str_replace('---', '-', $a);
    }
    else
    {
      addErrors("<u>getTextForUrl</u>", "No value for <b>".$key."</b>");
      return ST_EMPTY;
    }
  }
  

  /**
   * Build menu
   * 
   * @return $menusArray The menus array
   */
  function buildMenu()
  {
    // Get language file
    $lang_array = parse_ini_file(LINK_LANG);
    // Get language array keys
    $lang_array_keys = array_keys($lang_array);

    // Build menu with file content
    $firstTime = 0;
    $nbCat = 0;
    $nav = '<div id="navigation">';
    $previousCat = "CAT_1";
    $previousNavCat = "CAT_1_1";
    // Loop on number of keys
    for ($j = 0;$j<count($lang_array_keys);$j++)
    {
      // Get only categories
      if (substr($lang_array_keys[$j],0,3) == "CAT")
      {
        // Get category, trimed and where spaces are replaced by dashes
        $lineL = $lang_array_keys[$j];

        // Main menu
        if (strlen($lineL) == 5)
        {
          define("LINK_".$lineL, LINK_INDEX.getLgFileText("CONTENT").'='.
                  getLgFileTextForUrl($lineL));
          if ($lineL != "CAT_0")
          {
            $nav .= '<a id="'.$lineL.'" class="menu" href="'
                   .constant("LINK_".$lineL).'">'.getLgFileText($lineL).'</a>';
            $nbCat++;
          }
        }

        // Sub menu
        else if (strlen($lineL) == 7)
        {
          define("LINK_".$lineL, constant("LINK_".substr($lineL, 0, 5))
                  .'>'.getLgFileTextForUrl($lineL));
          $navCat = 'nav'.substr($lineL, 0, 5);

          if ($firstTime == 0)
          {
            $$navCat = '<div id="nav'.$navCat.'" class="navigationDiv">';
            $firstTime++;
          }

          $currentCat = substr($lineL, 0, 5);
          if ($previousCat == $currentCat)
          {
            $$navCat .= '<a id="'.$lineL.'" class="menu" href="'
                        .constant("LINK_".$lineL).'">'
                        .getLgFileText($lineL).'</a>';
          }
          else
          {
            $$previousNavCat .= '</div>';
            $$navCat .= '<div id="nav'.$currentCat.'" class="navigationDiv">';
            $$navCat .= '<a id="'.$lineL.'" class="menu" href="'
                        .constant("LINK_".$lineL).'">'
                        .getLgFileText($lineL).'</a>';
          }
          $previousCat = $currentCat;
          $previousNavCat = $navCat;
        }
        $menu[$k] = $lang_array_keys[$j];
      }
    }
    $nav .= '</div>';
    $$navCat .= '</div>';

    // Set menus array
    $menusArray[0] = $nav;
    for ($m = 1; $m<$nbCat+1; $m++)
    {
      $navCat = "navCAT_$m";
      $menusArray[$m] = $$navCat;
    }
    $nbMenu = count($menu);

    // Return menus array
    return $menusArray;
  }


  /**
   * Add errors
   * 
   * @param $title
   * @param $msg
   */
  function addErrors($title,$msg)
  {
  	if ((isset($_SESSION['error_msg'])) && (!empty($_SESSION['error_msg'])))
    {
      $errorsArray = $_SESSION['error_msg'];
    }
    else{
    	$errorsArray = array();
    }
    $error = "$title >> $msg";
    $mergedArray = array_push($errorsArray,$error);
  	$_SESSION['error_msg'] = $errorsArray;
  }


  /**
   * Show errors
   */
  function showErrors(){
  	if ((isset($_SESSION['error_msg'])) && (!empty($_SESSION['error_msg'])))
    {
  	  // Error div
  	  echo '<div id="error">';
  	  echo '<p class="error_div_title">Errors:</p>';
      echo '<ol>';
      foreach($_SESSION['error_msg'] as $key => $value)
      {
        echo '<li><p class="error_message">'.$value.'</p></li>';
      }
      echo '</ol></div>';

      // Initialize array
      $_SESSION['error_msg'] = array();
    }
  }


  /**
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
  function getGravatar($email,$s=80,$d='mm',$r='g',$img=false,$atts=array())
  {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&amp;d=$d&amp;r=$r";
    if($img)
    {
      $url = '<img src="'.$url.'"';
      foreach($atts as $key=>$val)
      {
        $url .= ' '.$key.'="'.$val.'"';
      }
      $url .= ' />';
    }
    return $url;
  }


  /**
   * curPageURL
   */
  function curPageURL()
  {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on")
    {
      $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80")
    {
      $pageURL .= $_SERVER["SERVER_NAME"].":";
      $pageURL .= $_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    }
    else
    {
      $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
  }


  /**
   * Get page url for language
   * 
   * @param $lg
   */
  function getPageUrlForLanguage($lg)
  {
    // Get curl page url and find index.php pattern
    $url = curPageURL();
    $findme = 'index.php';
    $pos = strpos($url, $findme);

    // Get language file
    $lang_array = parse_ini_file(LINK_LANG);

    $i=0;
    $urlSecondPart="";
    $contents = explode('>', $_GET[getLgFileText("CONTENT")]);
    foreach ($contents as &$value)
    {
      $x = str_replace("-"," ", $value);

      if($i==1)
      {
        $x2 = explode(' ', $x);
        $res = $x2[0]." ".$x2[1]." - ".$x2[2];
        $key = array_keys($lang_array,$res);
        $urlSecondPart .= ">";
        $urlSecondPart .= getLgFileTextForUrl($key[0],$lg);
      }
      else
      {
        $key = array_keys($lang_array,$x);
        $urlSecondPart .= getLgFileTextForUrl($key[$i],$lg);        
      }
      $i++;
    }
    if ($pos === false)
    {
      return $url;
    }
    else
    {
      return "index.php?".getLgFileText("CONTENT",$lg)."=".$urlSecondPart;
    }
  }


  /**
   * Get meta title
   */
  function getMetaTitle()
  {
    $url = curPageURL();
    $findme = 'index.php';
    $pos = strpos($url, $findme);
    $title = "";
    // Get language file
    $lang_array = parse_ini_file(LINK_LANG);
    
    if ($pos === false)
    {
      $title = printLgFileText("SITE_NAME");
    }
    else
    {
      $contents = explode('>', $_GET[getLgFileText("CONTENT")]);
      $i=0;
      $title = printLgFileText("SITE_NAME2")." - ";
      foreach ($contents as &$value)
      {
        $x = str_replace("-"," ", $value);
        if($i==1)
        {
          $x2 = explode(' ', $x);
          $res = $x2[0]." ".$x2[1]." - ".$x2[2];
          $key = array_keys($lang_array,$res);
          $title .= " > ";
          $title .= getLgFileText($key[0]);
        }
        else
        {
          $key = array_keys($lang_array,$x);
          $title .= getLgFileText($key[0]);
        }
        $i++;
      }
    }
    return $title;
  }
  
  /**
   * 
   */
  function printContent($filename)
  {
    // get contents of a category file
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $explodedContent = explode('<!--', $contents);

    // Get localized language corresponding to current language
    if (getLanguage() == LG_FR)
    {
      if ($explodedContent[1] != "")
      {
        $cnt_fr = explode('-->',$explodedContent[1]);
        print($cnt_fr[1]);        
      }
    }
    else if (getLanguage() == LG_EN)
    {
      if ($explodedContent[2] != "")
      {
        $cnt_en = explode('-->',$explodedContent[2]);
        print($cnt_en[1]);        
      }
    }
    else if (getLanguage() == LG_ES)
    {
      if ($explodedContent[3] != "")
      {
        $cnt_es = explode('-->',$explodedContent[3]);
        print($cnt_es[1]);
      }
    }

    // Module content
    if ($explodedContent[4] != "")
    {
      $cnt_mods = explode('-->',$explodedContent[4]);
      $cnt_mod = explode(';',$cnt_mods[1]);
      foreach($cnt_mod as &$mod)
      {
        $modTrimed = trim($mod);
        if($modTrimed != "")
        {
          include(constant($modTrimed));
        }
      }
    }
    fclose($handle);
  }
?>
