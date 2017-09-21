<?php include("./header.php");?>
<section class="hero" style="background: url(<?php echo $page->hero_image->url;?>) no-repeat center;">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-3 col-xs-5">
        <div class="slider-gradient text-uppercase white-text top-box inner-page-height">
          <p class="fs70 fw100 top-box__white-text"><?php echo $page->hero_image_text_top;?></p>
          <p class="fs95 fw300 orange-text top-box__orange-text about-mobile-bottom-text"><?php echo $page->hero_image_text_bottom;?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container about-page">
    <div class="row">
      <div class="col-lg-12 grid-height-695 section-margin100" style="margin-bottom: 100px;">
        <?php echo $page->page_title_text;?>
        <?php echo $page->page_text;?>
        <!--<h2 class="orange-text title fw100 fs55 form-group about-page__title">Our Commitment to our Valued Customers</h2>
        <p class="fs23 fw500 about-page__text-bold form-group">Our team of professionals focus has always been about building long term customer relationships by providing extraordinary customer service. As a result, our customers continue to request our services and express how pleased they are with Never L.A.T.E. Property Cleaning.</p>
        <p class="fs25 fw100" style="line-height: 42px;">Never Late Property Cleaning is a St. Petersburg property cleaning and St. Petersburg Cleaning Company service that specializes in exceptional cleaning solutions to your commercial offices and corporate facilities. Our business is to take care of all your cleaning needs, so your company’s time is spent running your organization. We provide exceptional commercial cleaning services to a wide range of facilities including: Post Construction, government complexes, medical complexes, office buildings, small offices, medical facilities, gyms, daycare centers, schools, churches, retail shops, auto dealership and various other type facilities.Your employees will not only enjoy coming to work; but take pride in their working environment and perform at their best for your organization. Our clients turn to Never Late to deliver professional, quality services, while providing a safe Green Cleaning environment. Whether you require daily, weekly or monthly service, or just one-time only service, you can count on Never L.A.T.E. as “The Trusted Name” in property cleaning. A Training Program is completed by all Cleaning Specialist before they are assigned to any client site. Employees are trained to pay attention to the details so the job is done correct the first time.</p>
        <p class="orange-text fs25 fw400">We are family owned and operated with over 30 years of experience in the Tampa Bay area!</p>-->
      </div>
    </div>
  </div>
</section>
<?php include("./footer.php");