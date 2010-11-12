<?php if (getLanguage() == LG_FR) { ?>
<!-- French content ////////////////////////////////////////////////////////-->


<!-- DIV Box title -->
<div class="box_title">
  <p class="box_title_txt"><?php printLgFileText("DOWNLOAD"); ?></p>
</div>

<!-- DIV Box title -->
<div class="box">
  <br />
  <p class="box_txt">Le template utilisé pour créer ce site est un projet 
  opensource:</p>
  <ul class="box_ul">
    <li>hébergé sur <a class="externalLink external box_link" 
                       href="http://github.com/">Github.com</a></li>
    <li class="box_ul_bigLi">à l'adresse suivante: 
      <a class="externalLink external box_link" 
         href="http://github.com/JeanPerriault/Bilazea-template">
        http://github.com/JeanPerriault/Bilazea-template</a>
    </li>
  </ul>

  <br />
  <br />
  <br />

  <!-- Gravatar (get avatar) -->
  <?php
    $urlAvatar = getGravatar("jean.perriault@gmail.com");
  ?>
  <div id="gravatar">
    <b>GrAvatar</b><br />
    <a href="http://fr.gravatar.com/jeanperriault">
      <img src="<?php echo $urlAvatar ?>" alt="Gravatar avatar" />
    </a>
  </div>

</div>


<!-- End french content ////////////////////////////////////////////////////-->


<?php } else if (getLanguage() == LG_EN) { ?>
<!-- English content ///////////////////////////////////////////////////////-->



<!-- DIV Box title -->
<div class="box_title">
  <p class="box_title_txt"><?php printLgFileText("DOWNLOAD"); ?></p>
</div>

<!-- DIV Box title -->
<div class="box">
  <br />
  <p class="box_txt">The template used to create this site is an open source 
  project:</p>
  <ul class="box_ul">
    <li>hosted on <a class="externalLink external box_link" 
                       href="http://github.com/">Github.com</a></li>
    <li class="box_ul_bigLi">at the following address: 
      <a class="externalLink external box_link" 
         href="http://github.com/JeanPerriault/Bilazea-template">
        http://github.com/JeanPerriault/Bilazea-template</a>
    </li>
  </ul>

  <br />
  <br />
  <br />

  <!-- Gravatar (get avatar) -->
  <?php
    $urlAvatar = getGravatar("jean.perriault@gmail.com");
  ?>
  <div id="gravatar">
    <b>GrAvatar</b><br />
    <a href="http://fr.gravatar.com/jeanperriault">
      <img src="<?php echo $urlAvatar ?>" alt="Gravatar avatar" />
    </a>
  </div>

</div>



<!-- End english content ///////////////////////////////////////////////////-->


<?php } else if (getLanguage() == LG_ES) { ?>
<!-- Spanich content ///////////////////////////////////////////////////////-->




<!-- DIV Box title -->
<div class="box_title">
  <p class="box_title_txt"><?php printLgFileText("DOWNLOAD"); ?></p>
</div>

<!-- DIV Box title -->
<div class="box">
  <br />
  <p class="box_txt">Le template utilizada para crear este sitio es un proyecto 
  open source:</p>
  <ul class="box_ul">
    <li>alojado en <a class="externalLink external box_link" 
                       href="http://github.com/">Github.com</a></li>
    <li class="box_ul_bigLi">en la siguiente dirección: 
      <a class="externalLink external box_link" 
         href="http://github.com/JeanPerriault/Bilazea-template">
        http://github.com/JeanPerriault/Bilazea-template</a>
    </li>
  </ul>

  <br />
  <br />
  <br />

  <!-- Gravatar (get avatar) -->
  <?php
    $urlAvatar = getGravatar("jean.perriault@gmail.com");
  ?>
  <div id="gravatar">
    <b>GrAvatar</b><br />
    <a href="http://fr.gravatar.com/jeanperriault">
      <img src="<?php echo $urlAvatar ?>" alt="Gravatar avatar" />
    </a>
  </div>

</div>


<!-- End spanich content ///////////////////////////////////////////////////-->
<?php } ?>