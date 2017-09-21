<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<section class="hero" style="background: url(<?php echo $page->hero_image->url;?>) no-repeat center;">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-3 col-xs-5">
        <div class="slider-gradient text-uppercase white-text top-box inner-page-height">
          <p class="fs70 fw100 top-box__white-text test-mobile-top-text"><?php echo $page->hero_image_text_top;?></p>
          <p class="fs95 fw300 orange-text top-box__orange-text test-mobile-bottom-text"><?php echo $page->hero_image_text_bottom;?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container testimonial-page ">
    <div class="row">
      <div class="col-lg-12 section-margin100" style="margin-bottom: 100px;">
        <?php echo $page->page_title_text;?>
        <?php echo $page->page_text;?>
        <?php 
          foreach($page->customer_quotes as $quote){
        ?>
        <div class="testimonial-page__single-testinmonial top-border fs25 fw100">
          <p>
            <i class="fa fa-quote-left" aria-hidden="true"></i>
            <?php echo $quote->single_quote;?> --<span class="bold testimonial-page__author fw500"><?php echo $quote->name_of_person;?></span>
          </p>
        <?php };?>
        
      </div>
    </div>
  </div>
</section>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));