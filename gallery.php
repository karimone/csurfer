<?php
/**
 * gallery.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 20/08/14
 * Time  : 13:01
 */
?>

<!-- Gallery start -->
<div id="gallery" class="container hidden-xs">
    <div class="row">

        <div class="row">
            <div class="col-lg-5 col-lg-push-1 col-md-5 col-md-push-1 col-sm-5 col-sm-push-1">
                <img src="img/gallery-image-1.png" class="img-responsive" width="526" height="359" alt="<?php echo _('Image of a boy using a tablet') ?>" />
            </div>
            <div class="col-lg-4 col-lg-push-1 col-md-4 col-md-push-1 col-sm-5 col-sm-push-1">
                <h1>1</h1>
                <p><?php echo _('Find a host with your tablet or<br />smartphone using the CamperSurfing App'); ?> </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-lg-push-1 text-right col-md-5 col-md-push-1 col-sm-5 col-sm-push-1">
                <h1>2</h1>
                <p><?php echo _('Plan your next trip choosing between<br />thousands of CamperSurfing hosts'); ?></p>
            </div>
            <div class="col-lg-5 col-lg-push-1 col-md-5 col-md-push-1 col-sm-5 col-sm-push-1"">
                <img src="img/gallery-image-2.png" class="img-responsive" width="492" height="383" alt="<?php echo _('Image of some people enjoying outdoor during a picnic') ?>" />
            </div>
        </div>

        <div id="third-image" class="row">
            <div class="col-lg-5 col-lg-push-1 col-md-5 col-md-push-1 col-sm-5 col-sm-push-1"">
                <img class="img-responsive" src="img/gallery-image-3.png" width="563" height="311" alt="<?php echo _('Image of camper parked in middle of the nature') ?>" />
            </div>
            <div class="col-lg-4 col-lg-push-2 col-md-4 col-md-push-3 col-sm-5 col-sm-push-1"">
                <h1>3</h1>
                <p><?php echo _('Enjoy your vacation and meet new friends.<br /> (Don\'t forget to post photos of your stay!)'); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- Gallery end -->

<!-- Gallery start -->
<div id="gallery-mobile" class="container visible-xs">
    <!-- first image -->
    <div class="row">
        <div class="col-xs-12">
            <img src="img/gallery-image-1_mobile.png" class="img-responsive" width="488" height="351"
                 alt="<?php echo _('Image of a boy using a tablet') ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">
            <span class="number">1</span>
        </div>
        <div class="col-xs-10">
            <p><?php echo _('Find a host with your tablet or smartphone using the CamperSurfing App'); ?> </p>
        </div>
    </div>

    <!-- second image -->
    <div class="row">
        <div class="col-xs-12">
            <img src="img/gallery-image-2_mobile.png" class="img-responsive" width="369" height="362"
                 alt="<?php echo _('Image of some people enjoying outdoor during a picnic') ?>"/>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2">
            <span class="number">2</span>
        </div>
        <div class="col-xs-10">
            <p><?php echo _('Plan your next trip choosing betweenthousands of CamperSurfing hosts'); ?></p>
        </div>
    </div>

    <!-- third image -->
    <div class="row">
        <div class="col-xs-12">
        <img class="img-responsive" src="img/gallery-image-3_mobile.png" width="484" height="275"
             alt="<?php echo _('Image of camper parked in middle of the nature') ?>"/>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2">
            <span class="number">3</span>
        </div>
        <div class="col-xs-10">
            <p><?php echo _('Enjoy your vacation and meet new friends. (Don\'t forget to post photos of your stay!)'); ?></p>
        </div>
    </div>
</div>
<!-- Gallery end -->