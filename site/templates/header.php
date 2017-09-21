<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page->seo->title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/nice_select.css?v=12345678">
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/main.css?v=12345678">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header z10 relative">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php $header = $pages->get("/header-content");?>
          <a href="/" class="navbar-brand"><img src="<?php echo $header->header_logo->url;?>" class="img-responsive" alt=""></a>
        </div>
        <div class="collapse navbar-collapse relative" id="bs-example-navbar-collapse-1">
          <?php
            $menu = $modules->get('MarkupMenuBuilder');
            $options = array(
              'menu_css_class' => 'nav navbar-nav absolute right-absolute center-absolute',
              'default_class' => 'fs18',
              'current_class' => 'active'
            );
            echo $menu->render('main', $options);
          ?> 
        </div>
      </div>
    </nav>

