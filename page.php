<?php

/**
 * Page template file.
 * @package Gozal
 */

 ?>
 <div id="page-height">
  <div id="footer-height">
    <div class="container-lg">
<?php
get_header();

?>
<div style="background-color:#fff;color:#222">
<?php
the_content();

?>

</div>

   
  </div>
  <!--footer-height -->
  <?php
  get_footer();
  ?>
</div>
<!--page-height -->