<?php
///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * tpl/site.php
 * 
 * Description:
 * This file contains the main site
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

<?php
  // Prolog stuff
  $using_ie6 = (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.') !== FALSE);
  if ($using_ie6)
  {
    echo PROLOG_DOCTYPE_IE6."\n";
  }
  else
  {
    echo PROLOG_XML."\n";
    echo PROLOG_DOCTYPE."\n";
  }
  echo PROLOG_HTML;

  // Header
  include(LINK_HEADER);
?>

<!-- BODY -->
<body>

  <!-- SITE -->
  <div id="site">

    <!-- HEAD PART -->
    <?php include(LINK_HEAD); ?>

    <!-- PAGE -->
    <div id="page">

      <!-- Last published / Most read  articles -->
      <?php 
        if (!isMaintenance($maintenance))
        {
          include(LINK_LASTMOST);
        }
      ?>

      <!-- Content -->
      <div id="content">
        <!-- 
          Article: here you'll find all content of site:
          - If maintenance is set to true, using tag or 
            index.html?maintenance=..., maintenance page is included
          - Otherwise site page is included
        -->
        <div id="article">
          <?php
            if (isMaintenance($maintenance))
            {
              include(LINK_MAINTENANCE);
            }
            else if ($_GET[getLgFileText("CONTENT")] == getLgFileText("MAP"))
            {
              include(LINK_MAP);
            }
            else if ($_GET["content"] == ERROR_400)
            {
              include(LINK_PAGE_ERR_400);
            }
            else if ($_GET["content"] == ERROR_401)
            {
              include(LINK_PAGE_ERR_401);
            }
            else if ($_GET["content"] == ERROR_403)
            {
              include(LINK_PAGE_ERR_403);
            }
            else if ($_GET["content"] == ERROR_404)
            {
              include(LINK_PAGE_ERR_404);
            }
            else if ($_GET["content"] == ERROR_500)
            {
              include(LINK_PAGE_ERR_500);
            }
            else
            {
              include(LINK_CONTENT);
            }
          ?>
        </div>
      </div>
    </div>

    <!-- ASIDE -->
    <?php include(LINK_ASIDE); ?>

    <!-- FOOTER -->
    <?php include(LINK_FOOTER); ?>
  </div>

  <!-- SHOW ERROR -->
  <?php showErrors(); ?>

  <!-- JAVASCRIPT -->
  <?php include(LINK_JAVASCRIPT); ?>

</body>
</html>
