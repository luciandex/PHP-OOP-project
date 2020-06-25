<?php declare(strict_types=1);


?>

<!-- Article Section -->
<section class="blog-section section style-four style-five">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="<?php echo $article->getUrl(); ?>"><img src="<?php echo RESOURCES_PATH; ?>images/blog/<?php echo $article->getImage(); ?>" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="<?php echo $article->getUrl(); ?>"><h5><?php echo $article->getTitle(); ?></h5></a>
                            <span>By <?php echo $article->getAuthor(); ?> / <?php echo $article->getCreatedAt(); ?></span>
                            <p><?php echo $article->getText(); ?></p>
                            <div class="text">
<!--                                <p>--><?php //echo $article->getText(); ?><!--</p>-->
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="comments-area">
                    <div class="sec-title">
                        <h6>Comments (3)</h6>
                    </div>
                    <div class="comment">
                        <div class="image-holder">
                            <figure>
                                <img src="<?php echo RESOURCES_PATH; ?>images/blog/1.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Jacky Chan<span>April 06, 2018</span></h6>
                            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sequi praesentium, veritatis nulla quam at exercitationem? Nesciunt molestiae neque modi.</p>
                        </div>                                            
                    </div>                            
                    <div class="comment reply-comment">
                        <div class="image-holder">
                            <figure>
                                <img src="<?php echo RESOURCES_PATH; ?>images/blog/2.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Robben Oti<span>April 07, 2018</span></h6>
                            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, a! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, obcaecati!</p>
                        </div>                                    
                    </div>                            
                    <div class="comment">
                        <div class="image-holder">
                            <figure>
                                <img src="<?php echo RESOURCES_PATH; ?>images/blog/3.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Chang Lingma<span>May 12, 2018</span></h6>
                            <h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae possimus suscipit esse quia sapiente obcaecati consequuntur dolor sequi adipisci unde!</p>
                        </div>                                    
                    </div>                    
                </div>
                <div class="form-area">
                    <div class="sec-title">
                        <h6>Leave A Comment</h6>
                    </div>
                    <form id="contact_form" name="contact_form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Review"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group form-bottom">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-style-one" type="submit" data-loading-text="Please wait...">Comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- Begin Side Bar zone -->

            <?php include_once 'side-bar-blog.php'; ?>

            <!-- End Side Bar zone -->

        </div>                
    </div>
</section>
<!-- End Article Section -->
