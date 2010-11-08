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
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////
?>

<!-- PROLOG -->


<?php 
  echo PROLOG_DOCTYPE."\n";
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
