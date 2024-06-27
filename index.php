<?php
include 'includes/header.php';
$page = 'home';
?>

<main>

    <!-- Banner Main Section Start Here -->
    <section class="banner-main-sec">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-content">
                        <h1 class="heading-one">
                            <span>Welcome To Wikinnovators</span>
                            Services for Wikipedia Page Creation
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <!-- Banner Brands Logos Include Here -->
                        <?php include 'includes/sections/banner-brands-logos.php'; ?>
                        <!-- Banner Brands Logos Include Here -->
                        <div class="website-main-buttons">
                            <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Consult With Expert</button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-img">
                        <img src="assets/images/wikipedia-browse-img.png" data-src="assets/images/wikipedia-browse-img.png" alt="Wikipedia Browser" width="100%" height="auto" class="img-fluid wikipedia-browse">
                        <div class="banner-review-slider">
                            <div class="banner-review-box">
                                <div class="review-box-img">
                                    <img src="assets/images/testimonials-author-images/img-4.webp" data-src="assets/images/testimonials-author-images/img-4.webp" alt="Thumb" width="115" height="115" class="img-fluid">
                                </div>
                                <div class="review-box-content">
                                    <h3 class="heading-five">Lorem Ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud magna aliqua magna aliqua.</p>
                                </div>
                                <div class="review-rating-area">
                                    <img src="assets/images/banner-logos/sitejabber.png" data-src="assets/images/banner-logos/sitejabber.png" alt="Thumb" width="100" height="20" class="img-fluid">
                                    <!-- Rating Star Icons Include Here -->
                                    <?php include 'includes/sections/rating-star-icons.php'; ?>
                                    <!-- Rating Star Icons Include Here -->
                                </div>
                            </div>
                            <div class="banner-review-box">
                                <div class="review-box-img">
                                    <img src="assets/images/testimonials-author-images/img-1.webp" data-src="assets/images/testimonials-author-images/img-1.webp" alt="Thumb" width="115" height="115" class="img-fluid">
                                </div>
                                <div class="review-box-content">
                                    <h3 class="heading-five">Lorem Ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud magna aliqua magna aliqua.</p>
                                </div>
                                <div class="review-rating-area">
                                    <img src="assets/images/banner-logos/sitejabber.png" data-src="assets/images/banner-logos/sitejabber.png" alt="Thumb" width="100" height="20" class="img-fluid">
                                    <!-- Rating Star Icons Include Here -->
                                    <?php include 'includes/sections/rating-star-icons.php'; ?>
                                    <!-- Rating Star Icons Include Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Main Section End Here -->

    <!-- Banner Bottom Section End Here -->
    <section class="banner-bottom-wrap">
        <div class="container-fluid">
            <!-- Banner Bottom Slider Include Here -->
            <?php include 'includes/sections/banner-bottom-slider.php'; ?>
            <!-- Banner Bottom Slider Include Here -->
        </div>
    </section>
    <!-- Banner Bottom Section End Here -->

    <!-- Wikipedia Page Section Start Here -->
    <section class="wikipedia-page-wrap">
        <div class="container">
            <div class="wikipedia-page-head">
                <h2 class="heading-two">Wikipedia Page Advantages</h2>
            </div>
            <div class="wikipedia-page-inner">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="wikipedia-page-box">
                            <div class="wikipedia-box-img">
                                <img src="assets/images/wikipedia-page-icons/01.png" data-src="assets/images/wikipedia-page-icons/01.png" alt="Icon" width="100" height="100"  class="img-fluid">
                            </div>
                            <div class="wikipedia-box-content">
                                <h3 class="heading-five">It Adds Credibility</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="wikipedia-page-box">
                            <div class="wikipedia-box-img">
                                <img src="assets/images/wikipedia-page-icons/02.png" data-src="assets/images/wikipedia-page-icons/02.png" alt="Icon" width="100" height="100"  class="img-fluid">
                            </div>
                            <div class="wikipedia-box-content">
                                <h3 class="heading-five">Drives In More Traffic</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="wikipedia-page-box">
                            <div class="wikipedia-box-img">
                                <img src="assets/images/wikipedia-page-icons/03.png" data-src="assets/images/wikipedia-page-icons/03.png" alt="Icon" width="100" height="100"  class="img-fluid">
                            </div>
                            <div class="wikipedia-box-content">
                                <h3 class="heading-five">Improves Visibility</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="wikipedia-page-box">
                            <div class="wikipedia-box-img">
                                <img src="assets/images/wikipedia-page-icons/04.png" data-src="assets/images/wikipedia-page-icons/04.png" alt="Icon" width="100" height="100"  class="img-fluid">
                            </div>
                            <div class="wikipedia-box-content">
                                <h3 class="heading-five">Improves Off-Page SEO</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wikipedia Page Section End Here -->

    <!-- Unlock Story Section Start Here -->
    <section class="unlock-story-wrap">
        <div class="container">
            <div class="unlock-story-inner">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="unlock-story-content">
                            <span class="short-heading">About Us</span>
                            <h3 class="heading-two">The Best Wikipedia Service Providers Online</h3>
                            <p>Have you or your company gotten much press or media attention from unbiased, respectable third parties? If that's the case, you might be eligible for a Wikipedia profile. Wikipedia content is a by-product of what the press, media, or academic community writes about a subject. It attempts to be an impartial collection of verifiable and established facts. Notability cannot be earned merely through blogs, press releases, product information, or self-published items. Contact us for a free evaluation to see whether or not you qualify for a spot on the internet's most popular website.</p>
                            <ul class="unlock-story-list">
                                <li>
                                    <img src="assets/images/elements/mission.png" data-src="assets/images/elements/mission.png" alt="Check Icon" width="50" height="50" class="img-fluid">
                                    <h4 class="heading-three">Mission</h4> 
                                    <p>We extend our services to individual and business pages created for those looking for global recognition.</p>
                                </li>
                                <li>
                                    <img src="assets/images/elements/vision.png" data-src="assets/images/elements/vision.png" alt="Check Icon" width="50" height="50" class="img-fluid">
                                    <h4 class="heading-three">Vision</h4> 
                                    <p>We hope to provide a platform where people can turn their dreams of global notability into reality.</p>
                                </li>
                            </ul>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                                <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Consult With Expert</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="unlock-story-img">
                            <img src="assets/images/unlock-story-img.png" data-src="assets/images/unlock-story-img.png" alt="Unlock Story" width="90%" height="100%"  class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Unlock Story Section End Here -->

    <!-- Service Offer Section Start Here -->
    <section class="service-offer-wrap">
        <div class="container">
            <div class="service-offer-head">
                <span class="short-heading">Services</span>
                <h3 class="heading-two">Service We Offer</h3>
            </div>
            <div class="service-offer-inner">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-img">
                                <img src="assets/images/service-offer-icons/ser-1.png" data-src="assets/images/service-offer-icons/ser-1.png" alt="Icon" width="75" height="75"  class="img-fluid">
                            </div>
                            <div class="offer-box-content">
                                <a href="void::" tabindex="0"> 
                                    <h4 class="heading-four">Research & Copywriting</h4>
                                </a>
                                <p>We offer comprehensive copywriting services to our valued clients – at an affordable cost - to ensure their total satisfaction. Our research team conducts thorough research and analyzes the information – you being the client, provide us - before we begin working on your Wikipedia page.</p>
                            </div>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-img">
                                <img src="assets/images/service-offer-icons/ser-2.png" data-src="assets/images/service-offer-icons/ser-2.png" alt="Icon" width="75" height="75"  class="img-fluid">
                            </div>
                            <div class="offer-box-content">
                                <a href="void::" tabindex="0"> 
                                    <h4 class="heading-four">Page Creation</h4>
                                </a>
                                <p>With professional designers and copywriters available, we ensure to provide you with excellent page creation services – in compliance with all the Wikipedia rules – to augment your brand's worth.</p>
                            </div>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-img">
                                <img src="assets/images/service-offer-icons/ser-3.png" data-src="assets/images/service-offer-icons/ser-3.png" alt="Icon" width="75" height="75"  class="img-fluid">
                            </div>
                            <div class="offer-box-content">
                                <a href="void::" tabindex="0"> 
                                    <h4 class="heading-four">Page Translation</h4>
                                </a>
                                <p>Our language experts will translate your Wikipedia page into various languages without compromising the content's quality and accuracy.</p>
                            </div>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-img">
                                <img src="assets/images/service-offer-icons/ser-4.png" data-src="assets/images/service-offer-icons/ser-4.png" alt="Icon" width="75" height="75"  class="img-fluid">
                            </div>
                            <div class="offer-box-content">
                                <a href="void::" tabindex="0"> 
                                    <h4 class="heading-four">Page Editing</h4>
                                </a>
                                <p>We offer comprehensive copywriting services to our valued clients – at an affordable cost - to ensure their total satisfaction. Our research team conducts thorough research and analyzes the information – you being the client, provide us - before we begin working on your Wikipedia page.</p>
                            </div>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-img">
                                <img src="assets/images/service-offer-icons/ser-5.png" data-src="assets/images/service-offer-icons/ser-5.png" alt="Icon" width="75" height="75"  class="img-fluid">
                            </div>
                            <div class="offer-box-content">
                                <a href="void::" tabindex="0"> 
                                    <h4 class="heading-four">Page Updates</h4>
                                </a>
                                <p>We offer comprehensive copywriting services to our valued clients – at an affordable cost - to ensure their total satisfaction. Our research team conducts thorough research and analyzes the information – you being the client, provide us - before we begin working on your Wikipedia page.</p>
                            </div>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-img">
                                <img src="assets/images/service-offer-icons/ser-6.png" data-src="assets/images/service-offer-icons/ser-6.png" alt="Icon" width="75" height="75"  class="img-fluid">
                            </div>
                            <div class="offer-box-content">
                                <a href="void::" tabindex="0"> 
                                    <h4 class="heading-four">Research & Copywriting</h4>
                                </a>
                                <p>We offer comprehensive copywriting services to our valued clients – at an affordable cost - to ensure their total satisfaction. Our research team conducts thorough research and analyzes the information – you being the client, provide us - before we begin working on your Wikipedia page.</p>
                            </div>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Offer Section End Here -->

    <!-- Main CTA Section Start Here -->
    <section class="cta-main-wrap">
        <div class="container">
            <div class="cta-main-inner">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cta-main-content">
                            <h2 class="heading-one">Meet Our Wikipedia Professionals</h2>
                            <p>Having spent years in the industry, our Wikipedia page writing service providers are considered more than just professional Wikipedia writers. Instead, they have been deemed by Wikipedia itself as experts at what they do and indispensable to any organization they are part of. Fortunately for us, they are a part of us.</p>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                                <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Consult With Expert</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main CTA Section End Here -->

    <!-- Why Choose Section Start Here -->
    <section class="why-choose-wrap">
        <div class="container">
            <div class="why-choose-head">
                <h3 class="heading-two">This Is How We Do</h3>
            </div>
            <div class="why-choose-inner">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                    <img src="assets/images/service-offer-icons/research-analys.png" data-src="assets/images/service-offer-icons/research-analys.png" alt="Research Analysis" width="45" height="45" class="img-fluid">
                                </div>
                            </div>
                            <div class="choose-box-content">
                                <h4 class="heading-five">Research & Analysis</h4>
                                <p>No project is too big or too small! Just shoot us a message and Let us know what you have in we're all ears (and thumbs, we're good at typing too).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                    <img src="assets/images/service-offer-icons/article-write.png" data-src="assets/images/service-offer-icons/article-write.png" alt="Article Writing" width="45" height="45" class="img-fluid">
                                </div>
                            </div>
                            <div class="choose-box-content">
                                <h4 class="heading-five">Wikipedia Article Writing</h4>
                                <p>Let's chat about your project. We'll ask questions you answer them, and then we'll figure out the best approach to get your idea breathing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                    <img src="assets/images/service-offer-icons/feedback-rev.png" data-src="assets/images/service-offer-icons/feedback-rev.png" alt="Feedback" width="45" height="45" class="img-fluid">
                                </div>
                            </div>
                            <div class="choose-box-content">
                                <h4 class="heading-five">Feedback & Revisions</h4>
                                <p>Once the plan is hatched, we'll take your thought process and mold into something amazing while also keeping you in the loop at every step.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                    <img src="assets/images/service-offer-icons/article-publish.png" data-src="assets/images/service-offer-icons/article-publish.png" alt="Article Publishing" width="45" height="45" class="img-fluid">
                                </div>
                            </div>
                            <div class="choose-box-content">
                                <h4 class="heading-five">Article Publishing</h4>
                                <p>Okay fine. We’ll let you take a sneak peek (or two) of your finished project, and we make sure it's exactly what you been expecting it to be.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                    <img src="assets/images/service-offer-icons/upkeep-monitor.png" data-src="assets/images/service-offer-icons/upkeep-monitor.png" alt="Monitoring" width="45" height="45" class="img-fluid">
                                </div>
                            </div>
                            <div class="choose-box-content">
                                <h4 class="heading-five">Upkeep & Monitoring</h4>
                                <p>Even after launch, we're just a shout away. We'll answer questions, provide support, and help you celebrate your success!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Section End Here -->

    <!-- Testimonials Section Start Here -->
    <section class="testi-main-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="testi-main-left">
                        <span class="short-heading">Testimonials</span>
                        <h2 class="heading-two">What Our Clients Say Drives Us to Go Above & Beyond.</h2>
                        <p>Have you or your company gotten much press or media attention from unbiased, respectable third parties? If that's the case, you might be eligible for a Wikipedia profile. Wikipedia content is a by-product of what the press, media, or academic community writes about a subject. It attempts to be an impartial collection of verifiable and established facts. Notability cannot be earned merely through blogs, press releases, product information, or self-published items. Contact us for a free evaluation to see whether or not you qualify for a spot on the internet's most popular website.</p>
                        <div class="website-main-buttons">
                            <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Consult With Expert</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="testi-auth-main">
                        <div class="testi-auth-images">
                            <div class="testi-images-items">
                                <img src="assets/images/testimonials-author-images/img-1.webp" data-src="assets/images/testimonials-author-images/img-1.webp" alt="image" class="img-fluid" width="100%" height="auto" />
                                <h3 class="heading-seven">Ayesha Khan</h3>
                                <p>Marketing Manager at Green Solutions</p>
                                <!-- Rating Star Icons Include Here -->
                                <?php include 'includes/sections/rating-star-icons.php'; ?>
                                <!-- Rating Star Icons Include Here -->
                            </div>
                        </div>
                        <div class="testi-auth-images">
                            <div class="testi-images-items">
                                <img src="assets/images/testimonials-author-images/img-2.webp" data-src="assets/images/testimonials-author-images/img-2.webp" alt="image" class="img-fluid" width="100%" height="auto" />
                                <h3 class="heading-seven">Christopher Wong</h3>
                                <p>CEO of Tech Toys</p>
                                <!-- Rating Star Icons Include Here -->
                                <?php include 'includes/sections/rating-star-icons.php'; ?>
                                <!-- Rating Star Icons Include Here -->
                            </div>
                        </div>
                        <div class="testi-auth-images">
                            <div class="testi-images-items">
                                <img src="assets/images/testimonials-author-images/img-4.webp" data-src="assets/images/testimonials-author-images/img-4.webp" alt="image" class="img-fluid" width="100%" height="auto" />
                                <h3 class="heading-seven">Elijah Rodriguez</h3>
                                <p>Head Chef at The Spice Gallery</p>
                                <!-- Rating Star Icons Include Here -->
                                <?php include 'includes/sections/rating-star-icons.php'; ?>
                                <!-- Rating Star Icons Include Here -->
                            </div>
                        </div>
                        <div class="testi-auth-images">
                            <div class="testi-images-items">
                                <img src="assets/images/testimonials-author-images/img-3.webp" data-src="assets/images/testimonials-author-images/img-3.webp" alt="image" class="img-fluid" width="100%" height="auto" />
                                <h3 class="heading-seven">Michael Anderson</h3>
                                <p>Owner of Local Coffee Shop</p>
                                <!-- Rating Star Icons Include Here -->
                                <?php include 'includes/sections/rating-star-icons.php'; ?>
                                <!-- Rating Star Icons Include Here -->
                            </div>
                        </div>
                        <div class="testi-auth-images">
                            <div class="testi-images-items">
                                <img src="assets/images/testimonials-author-images/img-5.webp" data-src="assets/images/testimonials-author-images/img-5.webp" alt="image" class="img-fluid" width="100%" height="auto" />
                                <h3 class="heading-seven">Kimberly Choi</h3>
                                <p>HOD at Creative Edge</p>
                                <!-- Rating Star Icons Include Here -->
                                <?php include 'includes/sections/rating-star-icons.php'; ?>
                                <!-- Rating Star Icons Include Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="testi-auth-content">
                        <div class="testi-content-items">
                            <div class="testi-content-main">
                                <p>New things were happening at our company all the time, but our page wasn't reflecting that.  Wikithinkers helped in revamping everything. Now our page is up-to-date and shows off our company's growth perfectly!</p>
                            </div>
                            <!-- Testi Review Icon Include Here -->
                            <?php include 'includes/sections/testi-review-icon.php'; ?>
                            <!-- Testi Review Icon Include Here -->
                        </div>
                        <div class="testi-content-items">
                            <div class="testi-content-main">
                                <p>Wikithinkers monitors our online reputation and helps us deal with unfair reviews.  They helped us craft a calm, professional response that protected our brand image.  Lifesavers!</p>
                            </div>
                            <!-- Testi Review Icon Include Here -->
                            <?php include 'includes/sections/testi-review-icon.php'; ?>
                            <!-- Testi Review Icon Include Here -->
                        </div>
                        <div class="testi-content-items">
                            <div class="testi-content-main">
                                <p>Honestly, Wikipedia editing seemed way too complicated for us to handle ourselves. This team made the whole process smooth and stress-free.  They wrote a fantastic page for our company, and it's really helped boost our online presence.</p>
                            </div>
                            <!-- Testi Review Icon Include Here -->
                            <?php include 'includes/sections/testi-review-icon.php'; ?>
                            <!-- Testi Review Icon Include Here -->
                        </div>
                        <div class="testi-content-items">
                            <div class="testi-content-main">
                                <p>We wanted a Wikipedia page, but we weren't sure where to start. So we hired this incredible team. They created a great page for us, and they even monitor it for any potential issues.</p>
                            </div>
                            <!-- Testi Review Icon Include Here -->
                            <?php include 'includes/sections/testi-review-icon.php'; ?>
                            <!-- Testi Review Icon Include Here -->
                        </div>
                        <div class="testi-content-items">
                            <div class="testi-content-main">
                                <p>Our Wikipedia page was full of outdated information.  Wikithinkers Writers came in and gave it a complete refresh.  Now our page is accurate and reflects our company's current success.  We've even seen a bump in website traffic since the update!</p>
                            </div>
                            <!-- Testi Review Icon Include Here -->
                            <?php include 'includes/sections/testi-review-icon.php'; ?>
                            <!-- Testi Review Icon Include Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End Here -->

    <!--FAQS Question Section Start Here -->
    <section class="faqs-sec-wrap">
        <div class="container">
            <div class="faqs-sec-head">
                <h4 class="heading-two">
                    Got a Query?
                    <span>We’ve Got Answers!</span>
                </h4>
            </div>
            <div class="row align-items-center">
                <div class="col-xx-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="faqs-sec-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        My online info is kinda messy, can you help clean it up?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely!  We can help with things like managing online reviews, sprucing up your Wikipedia page, or even getting rid of outdated content that doesn't reflect the awesome you anymore.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Everyone's talking about reputation marketing, what's the deal?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Well it’s more like building a good online handshake! We can chat with you about your goals and create a personalized plan to make your online reputation shine which also reflects your best self and builds trust with potential customers or collaborators.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can you translate Wikipedia pages too?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Oh yeah. That’s one of our expertise also the world wide web is a big place! So yes. We can help take a lead on language barrier by translating your Wikipedia page or any other important content so you can connect with a global audience without a doubt.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        This all sounds great, but how much does it cost?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Can’t specifically quote and answer that right now. Since every project is unique so we need to have a word first to better understand your needs and give you a customized quote. We won't break the bank, promise!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS Question Section End Here -->

    <!--Main Contact Form Section Start Here -->
    <section class="main-contact-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-form-side">
                        <h4 class="heading-two">Get A Free Consultation</h4>
                        <!-- Contact Form Side Form Include Here -->
                        <form action="https://leads.infinityprojectmanager.com/brand/wikinnovators/lead" method="GET">
                            <input name="brand_name" type="hidden" value="wikinnovators.com">
                            <input id="lead_area" name="modal_form" type="hidden" value="https://wikinnovators.com/">
                            <?php include 'includes/sections/contact-form-side.php'; ?>
                        </form>
                        <!-- Contact Form Side Form Include Here -->
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="main-contact-img">
                        <img src="assets/images/contact-form-img.png" data-src="assets/images/contact-form-img.png" alt="Img" width="100%" height="auto" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Contact Form Section End Here -->

</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>