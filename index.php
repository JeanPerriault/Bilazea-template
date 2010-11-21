<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * index.php
 * 
 * Description:
 * This file contains code
 * - to set language used in Bilazea template
 * - to define and initialize variables used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web 
 */
///////////////////////////////////////////////////////////////////////////////

  // MAINTENANCE //////////////////////////////////////////////////////////////
  $maintenance = true;

  // INIT SET & SESSION ///////////////////////////////////////////////////////
  $init = ini_set('session.use_trans_sid','0');
  session_start();
  header('Content-Type: text/html; Charset=UTF-8');

  // INCLUDE UTILS FUNCTIONS
  include('./inc/utils.php');

  // LANGUAGES
  setLanguage();

  // DEFINE STUFF /////////////////////////////////////////////////////////////
  define(ST_EMPTY,"");

  // DOCTYPE
  //define(DOCTYPE,            '<!DOCTYPE html>');
  define(PROLOG_XML,         '<?xml version="1.0"?>');
  define(PROLOG_DOCTYPE,     '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"'
                             .' "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');

  // META
  define(META_CONTENT,       '<meta http-equiv="Content-Type" '
                             .'content="text/html; charset=utf-8;" />');
  define(META_CONTENT_ROBOT, '<meta content="index, follow" name="robots" />');
  define(META_CONTENT_KEY,   '<meta name="keywords" content="'
                             .getLgFileText("META_CONTENT_KEY_VALUE").'" />');
  define(META_CONTENT_DESC,  '<meta name="description" content="'
                             .getLgFileText("META_CONTENT_DESC_VALUE").'" />');
  define(META_LINK_RSS,      '<link title="RSS 2.0" type="application/rss+xml" '
                             .'rel="alternate" href="index.php?'
                             .getLgFileText("CONTENT").'=rss" />');
  define(META_LINK_ATOM,     '<link title="Atom 1.0" type="application/atom+xml" '
                             .'rel="alternate" href="/index.php?'
                             .getLgFileText("CONTENT").'=atom" />');

  // INCLUDE LINKS
  include('./inc/links.php');


  /////////////////////////////////////////////////////////////////////////////
  // LAUNCH SITE
  include(LINK_TPL_SITE);
?>
