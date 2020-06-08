<?php declare(strict_types=1);


$contactForm = new \App\Controllers\ContactController();

if (!empty($_POST)) {
    $contactForm->contactUs();
}

//var_dump($contactForm);

//print_r($_POST);
//print_r($_SESSION);
//print_r($_REQUEST);
//$_POST = null;

//try {
//
//} catch (){
//
//}


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
                if(isset($_POST['errors'])) {
                    echo '<div class="badge" style="background-color: red">';
                    foreach ($_POST['errors'] as $error) echo $error . "<br/>";
                    echo "</div>";
                } elseif (isset($_POST['submit'])) {
                    echo '<div class="badge" style="background-color: greenyellow">';
                    echo "Message was sent succesfully";
                    echo "</div>";
                }
                ?>

                <br/>
                <br/>


                <div class="contact-form">
                    <!-- contact form start -->
                    <form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>" class="row">
                <!-- form-control -->
                <!-- name -->
                <div class="col-md-6">
                    <input <?php /*if (isset(//////////////))*/ //echo 'style="background-color: #ffaede"'; ?>
                            class="form-control main"
                            value="<?php //echo ($_POST['name'] ?? ''); ?>"
                            type="text"
                            name="name"
                            placeholder="Name: *"
                            data-msg="Please enter at least 3 chars"
<!--                            required-->
                    >
                </div>
                <!-- email -->
                <div class="col-md-6">
                    <input <?php /*if (isset(//////////////))*/ //echo 'style="background-color: #ffaede"'; ?>
                            class="form-control main"
                            value="<?php //echo ($_POST['email'] ?? ''); ?>"
                            type="email"
                            name="email"
                            placeholder="Email: *"
                            data-rule="email"
                            data-msg="Please enter a valid email"
<!--                            required-->
                    >
                </div>
                <!-- subject -->
                <div class="col-md-12">
                    <input <?php /*if (isset(//////////////))*/ //echo 'style="background-color: #ffaede"'; ?>
                            class="form-control main"
                            value="<?php //echo ($_POST['subject'] ?? ''); ?>"
                            type="text"
                            name="subject"
                            placeholder="Subject: *"
                            data-msg="Please enter at least 5 chars"
<!--                            required-->
                    >
                </div>
                <!-- message -->
                <div class="col-md-12">
                            <textarea <?php /*if (isset(//////////////))*/ //echo 'style="background-color: #ffaede"'; ?>
                                    class="form-control main"
                                    name="message"
                                    rows="5"
                                    data-msg="Please write something for us with at least 20 chars"
                                    required
                                    placeholder="Your message: *"><?php // $_POST['message']; ?></textarea>
                </div>
                <!-- submit button -->
                <div class="col-md-12 text-right">
                    <button class="btn btn-style-one" type="submit" value="submit">Send message</button>
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
