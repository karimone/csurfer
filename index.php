<?php include('base.php'); ?>
<body>
<a name="#header"></a>
<div class="container">
<header class="row">
    <div class="row">
        <div id="languages" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
            <!-- languages -->
            <img src="img/uk_flag.png" alt="English Flag Language" class="selected"/>
            <img src="img/it_flag.png" alt="Italian Flag Language"/>
            <img src="img/de_flag.png" alt="German Flag Language"/>
            <img src="img/es_flag.png" alt="Spanish Flag Language"/>
            <img src="img/fr_flag.png" alt="French Flag Language"/>
            <?php /*
            */
            ?>
        </div>

        <div id="social-links" class="col-lg-1 col-lg-offset-3 col-md-2 col-md-offset-2">
            <a class="" href="<?= FACEBOOK_LINK ?>">
                <img src="img/facebook_icon.jpg" alt="Facebook Icon" class="img-rounded"
                     title="<?php echo _("Visit our Facebook Page") ?>"/>
            </a>
            <a class="" href="<?= TWITTER_LINK ?>">
                <img src="img/twitter_icon.jpg" alt="Twitter Icon" class="img-rounded"
                     title="<?php echo _("Visit our Twitter page") ?>"/>
            </a>
        </div>
    </div>

    <div class="row">
        <div id="logo" class="col-lg-4 col-md-3">
            <img src="img/logo.png" alt="CamperSurfing Logo" class="img-responsive">
        </div>
        <nav class="col-lg-8 col-md-8">
            <ul id="header-links">
                <li><a id="home-link" href="#header" class="active">Home</a></li>
                <li><a id="idea-link" href="#theidea"><?php echo _('The Idea'); ?></a></li>
                <li><a id="faq-link" href="#faq"><?php echo _('FAQ'); ?></a></li>
                <!-- <li><a href="#news"><?php echo _('News'); ?></a></li> -->
                <li><a id="about-link" href="#about"><?php echo _('About'); ?></a></li>
                <li><a id="contact-link" href="#contact"><?php echo _('Contact'); ?></a></li>
            </ul>
    </div>
</header

<section>
    <div id="banner" class="row">
        <div id="infobox" class="col-lg-5 col-md-5">
            <h1><?php echo _('Are you looking for great and safe camper spot?'); ?></h1>
            <h3><?php echo _('CamperSurfing let you find a spot for your camper in all the World!'); ?></h3>
            <form action="//gorjux.us1.list-manage.com/subscribe/post?u=7db505061fc2254f5c1957d0b&amp;id=f40b7187f5"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline"
                  target="_blank" novalidate>
                <input type="email" placeholder="<?php echo _('email address'); ?>" name="EMAIL"
                       id="mce-EMAIL" class="form-control" required>
                <input id="nl-submit" type="submit" class="btn btn-success"
                       value="<?php echo _('Submit'); ?>" name="subscribe"
                       id="mc-embedded-subscribe">
            </form>

            <p>
                <?php echo _("Keep in touch with us subscribing our newsletter!<br /> You'll be invited to join the BETA version when available."); ?>
            </p>
                <a class="" href="<?= FACEBOOK_LINK ?>">
                    <img src="img/facebook_big.jpg" alt="Facebook Icon" class="img-rounded"
                         title="<?php echo _("Visit our Facebook Page") ?>"/>
                    </a>
                <a class="" href="<?= TWITTER_LINK ?>">
                    <img src="img/twitter_big.jpg" alt="Twitter Icon"  class="img-rounded"
                        title="<?php echo _("Visit our Twitter page") ?>"/>
                </a>
        </div>
    </div>
</section>
</div> <!-- ./container -->

<?php include('description.php'); ?>
<?php include('idea.php'); ?>
<?php include('gallery.php'); ?>
<?php include('faq.php'); ?>
<?php //include('news.php'); ?>
    
<!-- Using app start -->
    <div class="container">
        <div class="row">
            <div class="col-log-12">
                <img src="img/using-app.jpg" alt="A girl using the CamperSurfing app on a smartphone" class="img-responsive"/>
            </div>
        </div>
    </div>
<!-- AUsing app start -->
    
<?php include('about.php'); ?>
<?php include('contact.php'); ?>
<?php include('footer.php'); ?>
