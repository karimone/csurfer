<?php
/**
 * footer.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 20/08/14
 * Time  : 12:43
 */
?>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="social">
                <a href="<?= FACEBOOK_LINK ?>"><i class="fa fa-facebook-square fa-3x" style="color: #3b5998;"></i></a>
                <a href="<?= TWITTER_LINK ?>"><i class="fa fa-twitter-square fa-3x" style="color: #4099ff;"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Footer start -->
<div class="footer">
    <div class="container">
        <div class="row down">

            <div class="span6">
                <p>&copy; CamperSurfing <?php echo date("Y"); ?>, All Rights Reserved</p>
            </div>

            <div class="span6 copy">
                <p>
                    Hosted on <a href="http://www.webfaction.com">WebFaction</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer start -->

<!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/functions.js"></script>
<?php require_once('google_analytics.php'); ?>
</body>
</html>
