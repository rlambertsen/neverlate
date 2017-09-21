<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<section class="hero" style="background: url(<?php echo $page->hero_image->url;?>) no-repeat center;">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-3 col-xs-5">
        <div class="slider-gradient text-uppercase white-text top-box inner-page-height">
          <p class="fs70 fw100 top-box__white-text"><?php echo $page->hero_image_text_top;?></p>
          <p class="fs95 fw300 orange-text top-box__orange-text"><?php echo $page->hero_image_text_bottom;?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container about-page">
    <div class="row">
      <div class="col-lg-12">
        <?php echo $page->page_title_text;?>
        <?php echo $page->page_text;?>
      </div>
    </div>
    <script src="https://neverlatecleaning.launch27.com/jsbundle"></script><iframe id="booking-widget-iframe" src="https://neverlatecleaning.launch27.com/quotes/new?w" style="border:none;width:100%;" scrolling="no"></iframe>
    <!-- <form action="" class="form contact form-group">
      <div class="row">
        <div class="col-sm-7">
          <div class="form-group">
            <label for="" class="sr-only">First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="form-group">
            <label for="" class="sr-only">Last Name</label>
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="form-group">
            <label for="" class="sr-only">Business Name</label>
            <input type="text" name="lname" class="form-control" placeholder="Business Name">
          </div>
        </div>
        <div class="col-sm-7">
          <div class="form-group">
            <label for="" class="sr-only">Phone</label>
            <input type="number" name="lname" class="form-control" placeholder="Phone" required>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <select name="biz-type" id="" class="form-control">
              <option value="null" selected disabled>Business Type</option>
            </select>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <select name="subject" id="" class="form-control">
              <option value="null" selected disabled>Subject</option>
            </select>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <textarea name="question" id="" cols="30" rows="10" class="form-control" placeholder="Question or requirment"></textarea>
          </div>
        </div>
        <div class="col-lg-12">
          <a href="javascript:;" class="btn btn-warning text-uppercase w300" type="submit">submit</a>
        </div>
      </div>
    </form> -->
  </div>
</section>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));