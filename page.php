<?php

/**
 * Page template file.
 * @package Gozal
 */

get_header();

?>
 <div id="page-height">
  <div id="footer-height">

<section>
    <div class="container-lg">
<div style="background-color:#fff;color:#222;min-height:85vh" class="p-lg-5 p-4" >
<title><?php the_title() ?></title>
<h2><?php the_title() ?></h2>
<?php
the_content();

?>
</div>
<!-- p-lg-5 p-4 -->
</div>
<!-- container-lg -->
</section>
  </div>
  <!--footer-height -->
  <?php
  get_footer();
  ?>
</div>
<!--page-height -->