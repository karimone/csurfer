<?php
/**
 * footer.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 20/08/14
 * Time  : 12:43
 */
?>


<!-- Footer start -->
<footer class="container footer">
    <div class="row">
        <div class="col-lg-6 col-lg-push-1">
            <p>
                &copy; CamperSurfing <?php echo date("Y"); ?>, All Rights Reserved<br />
                Hosted on <a href="http://www.webfaction.com">WebFaction</a>
            </p>
        </div>

        <div class="col-log-6 text-right">
            <p>
                <a href="#header" title="<?php echo _('Go to the top') ?>"> <i class="fa fa-chevron-up fa-3x"></i>
                </a>
            </p>
        </div>
    </div>
</footer>


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
