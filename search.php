<?php

/**
 * Search result page.
 *
 * @package gozal
 */

 ?>
 <div id="page-height">
  <div id="footer-height">
    <div class="container-lg">
<?php

get_header();
global $wp_query;
?>

<header class="m-4">
  <h2 class="page-title">
    <?php echo $wp_query->found_posts;?>
    <?php _e( 'Search Results Found For', 'gozal' ) ;?>:"<?php the_search_query(  ); ?>"
  </h2>
</header>

<?php if(have_posts(  )){
  ?>
<div class="container">
<?php 
 while(have_posts(  )){
   the_post(  );
   ?>
  
   <div class="card mb-5 p-3">
     <div class="card-body">
       <h3 class="card-tite">
         <a href="<?php echo esc_url( get_the_permalink() ) ; ?> ">
         <?php the_title(); ?>
        </a>
       </h3>
       <!-- card-tite -->
       <div class="search-card-container">
        
         <?php echo t_p_custom_thumbnail(get_the_ID(), 'medium',['calss'=> 'search-img' ]) ?>
         <div class="search-card-contect">
           <?php the_excerpt(  );?>
         </div>
         <!-- search-card-contect -->
       </div>
       <!-- search-card-container -->
     </div>
     <!-- card-body -->
   </div>
   <!-- card mb-5 p-3 -->
   <?php
 }

?>


  <?php
}else{
  get_search_form( );
}
?>
</div>
<!-- container -->
    </div>
    <!--container -->
    </div>
  <!--footer-height -->
  <?php
  get_footer();
  ?>
</div>