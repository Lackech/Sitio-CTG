<?php defined('_JEXEC') or die;?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<title>Ciencia Tecnologia y Genero</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<jdoc:include type="head" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/plantilla.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



<div class="header">
  <div class="menu-bar">
   	<a href="javascript:void(0);" class="btn-menu" onclick="showMenu()"><span class="fa fa-navicon"></span></a>
  </div>
  <div id="social-media">
  	<div class="icon-row">
    	<a href="#"><span class="fa fa-envelope"></span></a>
        <a href="#"><span class="fa fa-facebook-official"></span></a>
        <a href="#"><span class="fa fa-twitter-square"></span></a>
        <a href="#"><span class="fa fa-youtube-play"></span></a>
   	</div>
  </div>  
  
  <a href="<?php echo $this->baseurl; ?>">
  	<img id = "logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logocon.png"  />
    <span class="titulo">Ciencia Tecnologia y Genero</span>
  </a>
</div>

<div class="navbar" id="menu-id">
  <jdoc:include type="modules" name="menu" style="xhtml" />
</div>

<div class="breadcrumb" id="breadcrumbs">
    <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
</div>

<div class="row">
    
  <?php if($this->countModules('left-side')) : ?>
  <div class="side">
      <jdoc:include type="modules" name="left-side" style="xhtml" />
  </div>
  <?php endif; ?>
    
  <?php if($this->countModules('content-top')) : ?>
  <div class="main-content">
    
    <div class="contenido-top">
      <jdoc:include type="modules" name="content-top" style="xhtml" />
    </div>
        
    <div class="contenido-bottom">
      <jdoc:include type="modules" name="content-bottom" style="xhtml" />
    </div>
  </div>
  <?php endif; ?>




   
  <?php if($this->countModules('fullcontent-top')) : ?>
  <div class="fullcontenido-top">
    <jdoc:include type="modules" name="fullcontent-top" style="xhtml" />
  </div>
  <?php endif; ?>
      
  <?php if($this->countModules('fullcontent-bottom')) : ?>
  <div class="fullcontenido-bottom">
    <jdoc:include type="modules" name="fullcontent-bottom" style="xhtml" />
  </div>
  <?php endif; ?>
    
  <?php if($this->countModules('content')) : ?>
  <div class="contenido">
    <jdoc:include type="modules" name="content" style="xhtml" />
  </div>
  <?php endif; ?>

    <jdoc:include type="component" />
    
    
  <?php if($this->countModules('right-side')) : ?>
  <div class="side">
      <jdoc:include type="modules" name="right-side" style="xhtml" />
  </div>
  <?php endif; ?>
  
    
    
</div>

<div class="footer">

  <div id="left-footer">
          <span class="footer-title"><p>Red de Ciencia Tecnologia y Genero<br>Costa Rica</p></span>

        </div>
        
        <div id="right-footer">
          <div class="footer-col">
              <jdoc:include type="modules" name="footer-menu-1" style="xhtml" />
          </div>
        
          <div class="footer-col">
              <jdoc:include type="modules" name="footer-menu-2" style="xhtml" />
          </div>
        
          <div class="footer-col">
              <jdoc:include type="modules" name="footer-menu-3" style="xhtml" />
                    
            <div class="footer-icon-row">
              <a href="#"><span class="fa fa-envelope"></span></a>
              <a href="#"><span class="fa fa-facebook-official"></span></a>
              <a href="#"><span class="fa fa-twitter-square"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
            </div>
        
          </div>
            <div class="footer-col">
                <p class="copyright">Derechos reservados</p>
            </div>
        
        </div>

</div>



<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/menu.js" type="text/javascript"></script>

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/templates/prueba/flexslider/js/libs/jquery-1.7.min.js">\x3C/script>')</script>

<!-- FlexSlider -->
<script defer src="/templates/prueba/flexslider/jquery.flexslider.js"></script>


<script type="text/javascript">
                
jQuery(window).load(function() {
      jQuery('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });
    });
</script>
                
</body>
</html>