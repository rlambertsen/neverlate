<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<section class="hero" style="background: url(<?php echo $page->hero_image->url;?>) no-repeat center;">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-3 col-xs-5">
        <div class="slider-gradient text-uppercase white-text top-box inner-page-height">
          <p class="fs70 fw100 top-box__white-text em-mobile-top-text"><?php echo $page->hero_image_text_top;?></p>
          <p class="fs95 fw300 orange-text top-box__orange-text em-mobile-bottom-text"><?php echo $page->hero_image_text_bottom;?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container about-page">
    <div class="row">
      <div class="col-lg-12 grid-height-500 section-margin100" style="margin-bottom: 100px;">
        <?php echo $page->page_title_text;?>
        <?php echo $page->page_text;?>
        <div class="button">
          <?php echo $page->button_html;?>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="employment">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="row">
          <?php $header = $pages->get("/header-content");?>
          <a href="/" class="navbar-brand"></a>
          <div class="col-xs-4">
            <div class="modal-graphic " style="padding: 0px 18px 18px 18px;">
              <div class="image">
                <img src="<?php echo $header->header_logo->url;?>" class="img-responsive" alt="never late cleaning logo">
              </div>
              <p class="fs35 fw100 orange-text mobile-modal-text">
                Home <br>
                Service <br>
                Professionals <br>
                Needed <br>
                Today!
              </p>
            </div>
          </div>
          <div class="col-xs-8 border-left">
            <i class="fa fa-times pull-right" class="close" data-dismiss="modal" aria-label="Close"></i>
            <div class="padding" style="padding: 20px 20px 20px 20px;">
              
              <form action="" class="form">
                <div class="form-group">
                  <label for="" class="sr-only">First Name</label>
                  <input type="text" class="form-control" name="fName" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="" class="sr-only">Last Name</label>
                  <input type="text" class="form-control" name="lName" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="" class="sr-only">Email Address</label>
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group clearfix">
                  <label for="" class="fileContainer">
                    Choose File
                    <input type="file" class="input-uplaod">
                  </label>
                </div>
                <div class="form-group">
                  <p class="fileUpload"></p>
                </div>
                <textarea name="coverLetter" id="" cols="30" rows="10" class="form-control" placeholder="Cover Letter (Optional)"></textarea>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));