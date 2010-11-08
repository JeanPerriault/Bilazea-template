<!-- DIV Box title -->
<div class="box_title">
  <p class="box_title_txt"><?php printLgFileText("DOWNLOAD"); ?></p>
</div>

<!-- DIV Box title -->
<div class="box">
  <br />
  <p class="box_txt">Le template utilisé pour créer ce site est un projet 
  opensource.</p>
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
