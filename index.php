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
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

  // MAINTENANCE //////////////////////////////////////////////////////////////
  $maintenance = false;

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
  define(PROLOG_XML,         '<?xml version="1.0"?>');
  //define(PROLOG_DOCTYPE5,  '<!DOCTYPE html>');
  define(PROLOG_DOCTYPE,     '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" '
                             .'"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
  define(PROLOG_DOCTYPE_IE6, '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" ' 
                             .'"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">');

  // INCLUDE LINKS
  include('./inc/links.php');

  // META
  define(META_CONTENT,       '<meta http-equiv="Content-Type" '
                             .'content="text/html; charset=utf-8;" />');
  define(META_CONTENT_ROBOT, '<meta content="index, follow" name="robots" />');
  include(LINK_META);
  define(META_LINK_RSS,      '<link title="RSS 2.0" type="application/rss+xml" '
                             .'rel="alternate" href="index.php?'
                             .getLgFileText("CONTENT").'=rss" />');
  define(META_LINK_ATOM,     '<link title="Atom 1.0" type="application/atom+xml" '
                             .'rel="alternate" href="/index.php?'
                             .getLgFileText("CONTENT").'=atom" />');

  /////////////////////////////////////////////////////////////////////////////
  // LAUNCH SITE
  include(LINK_TPL_SITE);
?>
