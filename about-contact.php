<?php
/**
 * about-contact.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 20/08/14
 * Time  : 12:56
 */
?>

<!-- About/Contact start -->
<div class="about-contact">
    <div class="container">
        <div class="row">


            <!-- About start -->
            <a name="about"></a>
            <div class="span6 about">
                <h2><span><?php echo _("About"); ?></span></h2>
                <h3><?php echo _("This is who we are (at the moment)"); ?></h3>
                <div class="row">
                    <div class="span3 fouder">
                        <img src="img/karim.png" width="238" height="238" alt="KNG" />
                        <h4>K.N. Gorjux</h4>
                        <p class="desc">Web Developer</p>
                    </div>

                    <div class="span3 fouder">
                        <img src="img/renato.png" width="238" height="238" alt="Ronnie" />
                        <h4>Ronnie</h4>
                        <p class="desc">Manager</p>
                    </div>
                </div>
            </div>
            <!-- About end -->

            <!-- Contact start -->
            <a name="contact"></a>
            <div class="span6 contact">
                <h2><span><?php echo _("Contact"); ?></span></h2>
                <h3><?php echo _("Ask us anything"); ?></h3>
                <form action="" method="post" id="form-contact">
                    <div class="row">
                        <div class="span3">
                            <label for="First name"><?php echo _("First name"); ?></label>
                            <input type="text" name="first-name" id="first-name" class="span2">
                        </div>
                        <div class="span3">
                            <label for="First name"><?php echo _("Last name"); ?></label>
                            <input type="text" name="last-name" id="last-name" class="span2">
                        </div>
                        <div class="span3">
                            <label for="E-mail">E-mail</label>
                            <input type="text" name="email" id="email" class="span2">
                        </div>
                        <div class="span3">
                            <label for="Subject"><?php echo _("Subject"); ?></label>
                            <input type="text" name="subject" id="subject" class="span2">
                        </div>
                        <div class="span6">
                            <label for="Message"><?php echo _("Message"); ?></label>
                            <textarea id="message" name="message" class="span6"></textarea>
                        </div>
                        <div class="span3">
                          <input type="submit" class="btn btn-submit btn-large" value="<?php echo _('Submit'); ?>" name="submit" />
                            <div class="" id="message-sent">
                                <p> Message Succesfully Delivered!</p>
                            </div>
                            <div class="" id="message-error">
                                <p><?php echo _("Error sending the message!"); ?></p>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- Contact end -->
        </div>
    </div>
</div>
<!-- About/Contact end -->