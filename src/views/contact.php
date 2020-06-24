<?php declare(strict_types=1);

//$contactForm = new \App\controllers\ContactController();
//$contactForm->contact();
var_dump($_POST);
//var_dump($message);

?>

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>Location</h3>
                            <p>PO Box 16122 Collins Street West
                                <br>Victoria 8007 Canada</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3>Phone</h3>
                            <p>
                                (+48) 564-334-21-22-34
                                <br>(+48) 564-334-21-22-38
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p>
                                info@templatepath.com
                                <br>info@cleanxer.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">

                <?php
//                var_dump($messageStatus);

                if (isset($_POST['submit']) && !isset($_POST['errors']) /*&& !isset($e)*/) {
                    echo '<div class="badge" style="background-color: greenyellow">';
                    echo "Message was sent succesfully. <br> Thank you for contacting us!";
                    echo "</div>";
                }

                if (isset($_POST['errors'])) {
                    foreach ($_POST['errors'] as $error) {
                        echo '<div class="badge" style="background-color: red">';
                        echo $error . "<br/>";
                        echo "</div><br/>";
                    }

                    for ($i = 0; $i <= count($_POST['errors'])-1; $i++) {
                        if (strpos($_POST['errors'][$i], "Name") === 0) {$nm = 1;}
                        if (strpos($_POST['errors'][$i], "Subject") === 0) {$sbj = 1;}
                        if (strpos($_POST['errors'][$i], "Message") === 0) {$msg = 1;}
                    }
                }

                ?>

                <br/>
                <br/>


                <div class="contact-form">
                    <!-- contact form start -->

                    <form method="POST" action="<?php echo str_replace('/', '', $_SERVER['REQUEST_URI']); ?>"
                          class="row">
                        <!-- form-control -->
                        <!-- name -->
                        <div class="col-md-6">
                            <input <?php if (isset($nm) && $nm === 1) echo 'style="background-color: #ffaede"'; ?>
                                    class="form-control main"
                                    value="<?php echo($_POST['name'] ?? ''); ?>"
                                    type="text"
                                    name="name"
                                    placeholder="Name: *"
                                    data-msg="Please enter at least 3 chars"
                                    required>
                            <!--                            required>-->

                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input <?php //if (////////////////) echo 'style="background-color: #ffaede"'; ?>
                                    class="form-control main"
                                    value="<?php echo($_POST['email'] ?? ''); ?>"
                                    type="email"
                                    name="email"
                                    placeholder="Email: *"
                                    data-rule="email"
                                    data-msg="Please enter a valid email"
                                    required>
                            <!--                            required>-->

                        </div>
                        <!-- subject -->
                        <div class="col-md-12">
                            <input <?php if (isset($sbj) && $sbj === 1) echo 'style="background-color: #ffaede"'; ?>
                                    class="form-control main"
                                    value="<?php echo($_POST['subject'] ?? ''); ?>"
                                    type="text"
                                    name="subject"
                                    placeholder="Subject: *"
                                    data-msg="Please enter at least 5 chars"
                                    required>
                            <!--                            required>-->

                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea <?php if (isset($msg) && $msg === 1) echo 'style="background-color: #ffaede"'; ?>
                                    class="form-control main"
                                    name="message"
                                    rows="5"
                                    data-msg="Please write something for us with at least 20 chars"
                                    required
                                    placeholder="Your message: *"><?php echo($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit" name="submit" value="submit">Send message
                            </button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
    <!-- Google Map -->
    <div id="map"></div>
</section>
<!--====  End of Google Map  ====-->
