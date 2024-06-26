<?php
include 'includes/header.php';
$page = 'home';
?>

<main>

    <!-- Contact Banner Section Start Here -->
    <section class="contact-banner-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="contact-banner-content">
                        <h1 class="heading-one">Let’s Work On Your Project Soon</h1>
                        <p>No idea where your wiki page is going in any way? Don’t worry. We're here to chat, strategize, and help you make your wiki page legit.</p>
                        <?php echo $socialLinks; ?>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="contact-banner-images">
                        <img src="assets/images/conatct-banner-img.webp" data-src="assets/images/conatct-banner-img.webp" alt="Contact Img"  class="img-fluid" width="75%" height="100%" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Banner Section End Here -->

    <!-- Contact Area Section Start Here -->
    <section class="contact-area-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <div class="contact-area-content">
                        <div class="contact-area-head">
                            <h3 class="heading-two">Get In Touch!</h3>
                        </div>
                        <div class="contact-area-form">
                            <h4 class="heading-four">Hit us up</h4>
                            <p>Fill out the form below and our wiki geek will be in touch to help you build a rock-solid online presence.</p>
                            <form action="https://leads.infinityprojectmanager.com/brand/wikithinkers/lead" method="GET">
                                <input type="hidden" name="brand_name" value="wikithinkers.com">
                                <input type="hidden" id="lead_area" name="lead_area" value="https://www.wikithinkers.com/contact-us">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="number" name="phone" placeholder="Contact Number" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select name="select-query" class="form-select" aria-label="Default select example">
                                                <option selected disabled>Select Query</option>
                                                <option value="Wikipedia Page Editing">Wikipedia Page Editing</option>
                                                <option value="Wikipedia Page Translation">Wikipedia Page Translation</option>
                                                <option value="Review Management">Review Management</option>
                                                <option value="Brand Reputation Management">Brand Reputation Management</option>
                                                <option value="Reputation Marketing">Reputation Marketing</option>
                                                <option value="Content Removal Services">Content Removal Services</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button class="submit-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="contact-area-item">
                        <div class="contact-item-box">
                            <h5 class="heading-three">Call Us</h5>
                            <p>Looking for consultancy? We're just a phone call away!</p>
                            <a href="tel:<?php echo $locNumber; ?>"><i class="fa-solid fa-phone"></i> <?php echo $locNumber; ?></a>
                        </div>
                        <div class="contact-item-box">
                            <h5 class="heading-three">Email</h5>
                            <p>Email us outlining your needs, and we'll get back to you ASAP.</p>
                            <a href="mailto:<?php echo $locEmail; ?>"><i class="fa-light fa-envelope-circle-check"></i> <?php echo $locEmail; ?></a>
                        </div>
                        <div class="contact-item-box">
                            <h5 class="heading-three">Address</h5>
                            <p class="address-para"><i class="fa-light fa-location-dot"></i> <?php echo $locHeadAddress; ?></p>
                        </div>
                        <div class="contact-item-box">
                            <h5 class="heading-three">Live Chat</h5>
                            <p>Want to explore our services further? Connect with us instantly!</p>
                            <a href="void:;" class="chat-btn" onclick="<?php echo $locChatHref; ?>"><i class="fa-solid fa-messages"></i> Start Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area Section End Here -->

</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>