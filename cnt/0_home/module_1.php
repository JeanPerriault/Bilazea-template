<!-- DIV module title -->
<div class="module_title">
  <p class="module_title_txt"><?php printLgFileText("DAILY_VIDEO"); ?></p>
</div>

<!-- DIV module video -->

<?php if (getLanguage() == LG_FR) { ?>
<!-- French content ////////////////////////////////////////////////////////-->
<div class="module_video">
  <br />
  <object width="640" height="385" data="http://www.youtube.com/v/iANRO3I30nM?fs=1&amp;hl=fr_FR" 
           type="application/x-shockwave-flash">
    <param name="movie" value="http://www.youtube.com/v/iANRO3I30nM?fs=1&amp;hl=fr_FR"></param>
    <param name="allowFullScreen" value="true"></param>
    <param name="allowscriptaccess" value="always"></param>
  </object>
  <br />
</div>





<?php } else if (getLanguage() == LG_EN) { ?>
<!-- English content ///////////////////////////////////////////////////////-->
<div class="module_video">
  <br />
  <object width="640" height="385" data="http://www.youtube.com/v/iANRO3I30nM?fs=1&amp;hl=en_EN" 
           type="application/x-shockwave-flash">
    <param name="movie" value="http://www.youtube.com/v/iANRO3I30nM?fs=1&amp;hl=fr_FR"></param>
    <param name="allowFullScreen" value="true"></param>
    <param name="allowscriptaccess" value="always"></param>
  </object>
  <br />
</div>


<?php } else if (getLanguage() == LG_ES) { ?>
<!-- Spanich content ///////////////////////////////////////////////////////-->
<div class="module_video">
  <br />
  <object width="640" height="385" data="http://www.youtube.com/v/iANRO3I30nM?fs=1&amp;hl=es_ES" 
           type="application/x-shockwave-flash">
    <param name="movie" value="http://www.youtube.com/v/iANRO3I30nM?fs=1&amp;hl=fr_FR"></param>
    <param name="allowFullScreen" value="true"></param>
    <param name="allowscriptaccess" value="always"></param>
  </object>
  <br />
</div>


<?php } ?>
