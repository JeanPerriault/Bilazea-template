<!-- DIV Module title -->
<div class="module_title">
  <p class="module_title_txt"><?php printLgFileText("DOWNLOAD"); ?></p>
</div>

<!-- DIV module -->
<div class="module">
  <br />

<?php if (getLanguage() == LG_FR) { ?>
<!-- French content ////////////////////////////////////////////////////////-->
  <p class="module_txt">Le template utilisé pour créer ce site est un projet 
  opensource:</p>

  <div class="metabox">
    <a id="download_button" 
       class="download-source" 
       href="./download/bilazea_master.zip" 
       title="Download this website template as a .zip package" 
       rel="Download this website template as a .zip package" >
    <span class="icon"></span>
      <?php printLgFileText("DOWNLOAD"); ?>
    </a>
  </div>
  <div class="undermetabox">
    <ul class="module_ul">
      <li>hébergé sur <a class="externalLink external module_link" 
                         href="http://github.com/">Github.com</a></li>
      <li class="module_ul_bigLi">à l'adresse suivante: 
        <a class="externalLink external module_link" 
           href="http://github.com/JeanPerriault/Bilazea-template">
          http://github.com/JeanPerriault/Bilazea-template</a>
      </li>
    </ul>
  </div>


<?php } else if (getLanguage() == LG_EN) { ?>
<!-- English content ///////////////////////////////////////////////////////-->
  <p class="module_txt">The template used to create this site is an open source 
  project:</p>

  <div class="metabox">
    <a id="download_button" 
       class="download-source" 
       href="./download/bilazea_master.zip" 
       title="Download this website template as a .zip package" 
       rel="Download this website template as a .zip package" >
    <span class="icon"></span>
      <?php printLgFileText("DOWNLOAD"); ?>
    </a>
  </div>
  <div class="undermetabox">
    <ul class="module_ul">
      <li>hosted on <a class="externalLink external module_link" 
                         href="http://github.com/">Github.com</a></li>
      <li class="module_ul_bigLi">at the following address: 
        <a class="externalLink external module_link" 
           href="http://github.com/JeanPerriault/Bilazea-template">
          http://github.com/JeanPerriault/Bilazea-template</a>
      </li>
    </ul>
  </div>


<?php } else if (getLanguage() == LG_ES) { ?>
<!-- Spanich content ///////////////////////////////////////////////////////-->
  <p class="module_txt">El template utilizada para crear este sitio es un proyecto 
  open source:</p>

  <div class="metabox">
    <a id="download_button" 
       class="download-source" 
       href="./download/bilazea_master.zip" 
       title="Download this website template as a .zip package" 
       rel="Download this website template as a .zip package" >
    <span class="icon"></span>
      <?php printLgFileText("DOWNLOAD"); ?>
    </a>
  </div>
  <div class="undermetabox">
    <ul class="module_ul">
      <li>alojado en <a class="externalLink external module_link" 
                         href="http://github.com/">Github.com</a></li>
      <li class="module_ul_bigLi">en la siguiente dirección: 
        <a class="externalLink external module_link" 
           href="http://github.com/JeanPerriault/Bilazea-template">
          http://github.com/JeanPerriault/Bilazea-template</a>
      </li>
    </ul>
  </div>


<?php } ?>
  <br />
  <br />
  <br />
  <!-- Gravatar (get avatar) -->
  <div id="gravatar">
    <b>GrAvatar</b><br />
    <a href="http://fr.gravatar.com/jeanperriault">
      <img src="<?php echo getGravatar("jean.perriault@gmail.com"); ?>" alt="Gravatar avatar" />
    </a>
  </div>
</div>
