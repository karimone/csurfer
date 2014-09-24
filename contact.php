<?php
/**
 * about-contact.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 20/08/14
 * Time  : 12:56
 */
?>

<!-- Contact start -->
<a name="contact"></a>
<div id="contact" class="container">
    <div class="row">
       <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3  col-sm-6 col-sm-offset-3
            col-xs-10 col-xs-offset-1 text-center">
           <h2><?php echo _("Contact"); ?></h2>
           <h3><?php echo _("Ask us anything"); ?></h3>
       </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3
            col-xs-10 col-xs-offset-1">
            <form action="" method="post" id="form-contact" role="form">
                <div class="form-group">
                    <label for="first-name"><?php echo _("First name"); ?> *</label>
                    <input type="text" name="first-name" id="contact-first-name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="last-name"><?php echo _("Last name"); ?> *</label>
                    <input type="text" name="last-name" id="contact-last-name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">E-mail *</label>
                    <input type="text" name="email" id="contact-email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject"><?php echo _("Subject"); ?> *</label>
                    <input type="text" name="subject" id="contact-subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message"><?php echo _("Message"); ?> *</label>
                    <textarea id="contact-message" name="message" class="form-control" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <input id="contact-submit" type="submit" class="btn btn-primary btn-block"
                           value="<?php echo _('Submit'); ?>" name="submit" />
                    <div class="alert alert-success" id="message-sent">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        Message Successfully Delivered!
                </div>
            </form>
        </div>
    </div> <!-- ./end form row -->
</div> <!-- Contact end -->

