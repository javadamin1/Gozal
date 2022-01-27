<?php
/**
 * 
 * header navigation template.
 * 
 *  @package Gozal
 */
?>
<!-- <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <div class="container" >

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">خانه <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">خدمات</a>
      <a class="nav-item nav-link" href="#">تماس با ما</a>
      <a class="nav-item nav-link" href="#">درباره ما</a>
       <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> 
    </div>
  </div>
   <a class="navbar-brand" href="#">Navbar</a>
</div>
</nav> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">خدمات</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">تماس با ما</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">درباره ما</a>
      </li>
     
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <a class="navbar-brand" href="#">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
    ?>
    </a>
    <form id="search-form" class="my-lg-0" >
      <input  class="form-control mr-sm-2" type="search" placeholder="متن خود را وارد فرمایید" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">جستجو</button>
    </form>
  </div>
 </div>
</nav>

