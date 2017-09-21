<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<section class="hero" style="background: url(<?php echo $page->hero_image->url;?>) no-repeat center;">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-3 col-xs-5">
        <div class="slider-gradient text-uppercase white-text top-box inner-page-height">
          <p class="fs70 fw100 top-box__white-text"><?php echo $page->hero_image_text_top;?></p>
          <p class="fs95 fw300 orange-text top-box__orange-text blog-mobile-botton-text"><?php echo $page->hero_image_text_bottom;?></p>
        </div>
      </div>
    </div>
    <div class="absolute right-absolute center-absolute blog-signup hidden-xs">
      <p class="text-uppercase">sign up for the</p>
      <p class="text-uppercase">never late blog</p>
      <a href="javascript:;" class="btn btn-warning text-uppercase btn-w259">subscribe</a>
    </div>
  </div>
</section>
<section class="short-blogs">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <div class="short-blogs__main-content flex flex-spaceAround min-height250">
          <!-- <div class="short-blogs__blog-image">
            <img src="/site/templates/img/room.jpg" class="img-responsive" alt="">
          </div> -->
          <div class="short-blogs__blog-title orange-text fs35 fw100 text-uppercase">
            The new Never Late Property Cleaning website
          </div>
          <div class="short-blogs__blog-posted-date form-group">
            Tuesday 7.25.17 by John Smith
          </div>
          <div class="shirt-blogs__social-share">
            <ul class="list-inline">
              <li class="facebook"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like 0</li>
              <li class="facebook">Share</li>
              <li class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</li>
              <li class="pintrest"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pin it</li>
              <li class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
            </ul>
          </div>
          <div class="short-blogs__blog-share text-uppercase">
            <i class="fa fa-share-alt-square pull-left" aria-hidden="true"></i>
            SHARE
          </div>
          <div class="short-blogs__blog-exerpt fs18 fw300">
            Harume dusdand eliquuntis asitate doluptas dolorem quodit aruptiore plit ea numquo imus, cullit eaque cus mo qua tem volenim rem aut dellaut re porem fugia dio eos mos audae Cia et qui aboremp ossequi doluptaquae nonsendita dis et elestibusam apiduci temqui aliquibus sed modi nihitintum consequi optiur aliquid miniant ionseque volorrum rat adiam apelis il il idebitatur? Apid mo et vel ipis enim si tecto officab.
          </div>
        </div>
        <div class="short-blogs__main-content flex flex-spaceAround min-height250">
          <!-- <div class="short-blogs__blog-image">
            <img src="/site/templates/img/room.jpg" class="img-responsive" alt="">
          </div> -->
          <div class="short-blogs__blog-title orange-text fs35 fw100 text-uppercase">
            The new Never Late Property Cleaning website
          </div>
          <div class="short-blogs__blog-posted-date form-group">
            Tuesday 7.25.17 by John Smith
          </div>
          <div class="shirt-blogs__social-share">
            <ul class="list-inline">
              <li class="facebook"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like 0</li>
              <li class="facebook">Share</li>
              <li class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</li>
              <li class="pintrest"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pin it</li>
              <li class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
            </ul>
          </div>
          <div class="short-blogs__blog-share text-uppercase">
            <i class="fa fa-share-alt-square pull-left" aria-hidden="true"></i>
            SHARE
          </div>
          <div class="short-blogs__blog-exerpt fs18">
            Harume dusdand eliquuntis asitate doluptas dolorem quodit aruptiore plit ea numquo imus, cullit eaque cus mo qua tem volenim rem aut dellaut re porem fugia dio eos mos audae Cia et qui aboremp ossequi doluptaquae nonsendita dis et elestibusam apiduci temqui aliquibus sed modi nihitintum consequi optiur aliquid miniant ionseque volorrum rat adiam apelis il il idebitatur? Apid mo et vel ipis enim si tecto officab.
          </div>
        </div>
        <div class="short-blogs__load-button">
          <button class="btn btn-black white-text fs18 fw300">LOAD MORE CONTENT</button>
        </div>
      </div>
      <div class="col-sm-2 hidden-xs ">
        <div class="short-blogs__side-bar flex flex-spaceAround">
          <div class="orange-background__stars short-blogs__signup white-text fs18 marginTB20">
            <div class="padding25">
              <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
              <p class="orange-text fw100">Stay connected, informed + on track — get a weekly email from us. It’s short, timely + built for info.</p>
            </div>
            <div class="btn-group-justified short-blogs__button">
              <a href="javascript:;" class="btn btn-black text-uppercase orange-text fs25">get it weekly</a>
            </div>
          </div>
          <div class="short-blogs__search marginTB20">
            <input type="text" name="searchBlog" placeholder="SEARCH">
            <i class="fa fa-search pull-right fs18" aria-hidden="true"></i>
          </div>
          <div class="short-blogs__extra orange-fade padding25 marginTB20">
            <p class="white-text fs35 fw100">TOPICS</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
            <p>Green Cleanning</p>
          </div>
          <div class="short-blogs__extra orange-fade padding25 marginTB20">
            <p class="white-text fs35 fw100">ARCHIVE</p>
            <p>July 2017</p>
            <p>July 2017</p>
            <p>July 2017</p>
            <p>July 2017</p>
            <p>July 2017</p>
            <p>July 2017</p>
            <p>July 2017</p>
            <p>July 2017</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));