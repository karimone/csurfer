<?php include('base.php'); ?>
<body>
<a name="#header"></a>
<div class="header" id="header">
    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">

          <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <h1><a href="/" class="brand">CamperSurfing</a></h1>
          
        	<ul class="languages">
              <li class="en"><a href="/en">English</a></li>
        	  <li class="it"><a href="/it">Italiano</a></li>
              <?php /*
        	  <li class="de"><a href="/?locale=de_DE">Deutsch</a></li>
        	  <li class="es"><a href="/?locale=es_ES">Español</a></li>
        	  <li class="fr"><a href="/?locale=fr_FR">Français</a></li>
              */?>
        	</ul>
          
          <div class="nav-collapse collapse" style="height: 0px;">
            <ul class="nav" id="header-links">
              <li><a id="home-link" href="#header" class="active">Home</a></li>
              <li><a id="idea-link" href="#theidea"><?php echo _('The Idea'); ?></a></li>
              <li><a id="faq-link" href="#faq"><?php echo _('FAQ'); ?></a></li>
              <!-- <li><a href="#news"><?php echo _('News'); ?></a></li> -->
              <li><a id="about-link" href="#about"><?php echo _('About'); ?></a></li>
              <li><a id="contact-link" href="#contact"><?php echo _('Contact'); ?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
          
        </div>
      </div>
    </div>
  </div> 


    <!-- Main banner start -->
	<div class="main-banner">
      <div class="container">
      <div class="span8">
        <h1><span class="small"><?php echo _('Are you looking for</span> great and safe camper spot?'); ?></h1>
        <h3><?php echo _('CamperSurfing let you find a spot for your camper in all the World!'); ?></h3>
        <form action="//gorjux.us1.list-manage.com/subscribe/post?u=7db505061fc2254f5c1957d0b&amp;id=f40b7187f5" 
              method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <input type="email" placeholder="<?php echo _('email address'); ?>" name="EMAIL" 
              id="mce-EMAIL" class="span3 email" required>
        <input type="submit" class="btn btn-submit btn-large" 
                value="<?php echo _('Submit'); ?>" name="subscribe" 
                id="mc-embedded-subscribe">
        </form>
        <p class="small-note"><?php echo _('Subscribe with your email to keep informed!'); ?></p>
        
        <div class="social">
          <div class="facebook"><a href="<?= FACEBOOK_LINK ?>">Facebook</a></div>
          <div class="twitter"><a href="<?= TWITTER_LINK ?>">Twitter</a></div>
        </div>
    
        </div>
      </div>
	</div>
    <!-- Main banner end -->

<?php include('description.php'); ?>
<?php include('idea.php'); ?>
<?php include('gallery.php'); ?>
<?php include('faq.php'); ?>
<?php //include('news.php'); ?>
    
<!-- Using app start -->
<div class="using-app"></div>
<!-- AUsing app start -->
    
<?php include('about-contact.php'); ?>
<?php include('footer.php'); ?>
