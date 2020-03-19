<?php
/*
 * Template Name: BLOGS
 * Template Post Type: post, page, product
 */
?>
<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>LIMARP - </title>
    <link rel="canonical" href="https://amp.dev/es/documentation/guides-and-tutorials/start/create/basic_markup/">
	  <script async custom-element="amp-call-tracking" src="https://cdn.ampproject.org/v0/amp-call-tracking-0.1.js"></script>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
   <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>

      <style amp-custom><?php include 'style.css'; ?>
</style>
      <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
   
       <?php wp_head();?>
  </head>
  <body>
     <?php include 'menu.php'; ?> 
      <div class="blog-body-head col-11">
      <h1><?php the_title(); ?></h1>
    <p class="blog-body-head-by">BY LIZA POMPA, MD ON <?php the_date(); ?> </p>     
     </div>
      <div class="blog-body-text  col-11">
          <?php  the_content(); ?>
      </div>
    
     <?php include 'detail.php'; ?> 
  </body>
</html>