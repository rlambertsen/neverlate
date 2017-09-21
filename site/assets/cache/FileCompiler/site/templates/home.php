<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<section>
  <div id="main-slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active slide-default">
        <div class="container ">
          <div class="row">
            <div class="col-sm-6 col-xs-9 ">
              <div class="slider-gradient text-uppercase white-text top-box">
                <p class="fs85 fw100 top-box__white-text">exceptional</p>
                <p class="fs123 fw300 orange-text top-box__orange-text">cleaning</p>
                <p class="fs85 fw100 top-box__white-text">right on time</p>
                <a class="btn btn-warning text-uppercase hidden-xs hidden-sm" href="/booking/" style="padding: 20px 12px;font-size:22px;width:450px;">book a cleaning now</a>
              </div>
            </div>
          </div>
          <!-- <div class="row hidden-xs hidden-sm" style="margin-top: 50px;">
            <div class="col-sm-4">
              <div class="form-group">
                <select name="bedrooms" id="" class="nice">
                  <option selected disabled># Bedrooms</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5+</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <select name="bathrooms" id="" class="nice">
                  <option selected disabled># Bathrooms</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5+</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container section-padding">
  <div class="row hidden-md hidden-lg form-group">
    <!-- <div class="col-sm-4">
      <div class="form-group">
        <select name="bedrooms" id="" class="nice">
          <option selected disabled># Bedrooms</option>
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
          <option value="">4</option>
          <option value="">5+</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <select name="bathrooms" id="" class="nice">
          <option selected disabled># Bathrooms</option>
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
          <option value="">4</option>
          <option value="">5+</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="btn-group-justified">
        
      </div>
    </div> -->
    <div class="col-sm-12 text-center">
      <div class="btn-group-justified">
        <a class="btn btn-warning text-uppercase" href="/booking/" style="padding: 20px 12px;font-size:22px;">book a cleaning now</a>
      </div>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-sm-12">
      <?php echo $page->home_about_title;?>
      <?php echo $page->home_about_text;?>
    </div>
  </div>
  <div class="row form-group">
    <?php $count = 0; foreach($page->three_image_bundle as $image){  $count++;?>
    <div class="col-xs-4 col-<?php echo $count;?>">
      <img src="<?php echo $image->single_image->url; ?>" class="img-responsive center-block home-image home-image__<?php echo $count;?>" style="">
    </div>
    <?php };?>

  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
      <?php echo $page->button_html;?>
    </div>
  </div>
</section>
<section class="office-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php echo $page->services_copy;?>
        <div class="row">
          <div class="col-sm-12">
            <div class="graident-black-box">
              <p class="text-uppercase orange-text fs35 fw100">services</p>
              <div class="row">
                <div class="col-sm-4">
                  
                  <ul>
                    <?php 
                      foreach($page->service_repeater_one as $service){
                        echo "<li>{$service->service_item}</li>"; 
                      };
                    ?>
                    </ul>
                </div>
                <div class="col-sm-4">
                  <ul>
                    <?php 
                      foreach($page->service_repeater_two as $service){
                        echo "<li>{$service->service_item}</li>"; 
                      };
                    ?>
                    </ul>
                </div>
                <div class="col-sm-4">
                  <ul>
                    <?php 
                      foreach($page->service_repeater_three as $service){
                        echo "<li>{$service->service_item}</li>"; 
                      };
                    ?>
                    </ul>
                </div>
              </div>
            </div>
          </div>              
        </div>
      </div>
    </div>
  </div>
</section>
<section class="orange-stars height820">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center white-text">
        <p class="text-uppercase orange-stars__p-1st" style="">watch</p>
        <p class="text-uppercase orange-stars__p-2nd" style="">our video!</p>
        <div class="row">
          <div class="col-sm-8 col-xs-12 col-sm-offset-2">
            <div class="image-click relative" data-url="<?php echo $page->video_url;?>">
              <img src="/site/templates/img/click.jpg" alt="" class="img-responsive">
              <img src="/site/templates/img/circle-logo.svg" alt="" class="img-responsive center-block absolute image-click__logo">
            </div>
            <div class="video embed-responsive embed-responsive-16by9 hidden">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonials flex flex-column-center relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p class="orange-text title fw100 fs55 text-uppercase">testimonials</p>
      </div>
    </div>
    <div id="testimonials" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <?php 
          $count = 0;
          foreach($page->customer_quotes as $quote){
        ?>
        <div class="item <?php if ($count == 0){ echo "active";  }?>">
          <div class="qoute">
            <span class="qoute__text fs25 fw100"><?php echo $quote->single_quote;?></span> <span class="qoute__name fs25 fw100 orange-text">— <?php echo $quote->name_of_person;?></span>
          </div>
        </div>
        <?php $count++;};?>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#testimonials" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#testimonials" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</section>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
