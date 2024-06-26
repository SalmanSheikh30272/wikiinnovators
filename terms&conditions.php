<?php
include 'includes/header.php';
$page = 'home';
?>

<style>
/*Terms And Privacy Banner Css Start Here*/
section.terms-conditions-banner{
    padding: 100px 0px 50px;
    background: url(assets/images/bg-img/about-banner-bg.webp);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    min-height: 400px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.terms-conditions-banner .terms-banner-content{
    text-align: center;
}
.terms-banner-content .heading-one{
    color: #212121;
}
/*Terms And Privacy Banner Css End Here*/

/*Terms And Privacy Content Section Css Start Here*/
section.terms-privacy-wrap{
    padding: 30px 0;
}
.terms-privacy-wrap .terms-privacy-content{}
.terms-privacy-content .heading-two{
    color: #000;
    margin: 0 0 20px;
}
.terms-privacy-content p{
    color: #000;
    padding: 0;
}
.terms-privacy-content p strong{
    color: #1c1c1c;
}
.terms-privacy-content span{
    color: #1c1c1c;
    font-size: 18px;
    line-height: 24px;
    margin: 10px 0 10px 0;
    display: block;
}
.terms-privacy-content .heading-four{
    color: #000;
    margin: 0 0 15px;
}
.terms-privacy-content ul{
    margin: 0 0 20px;
    padding: 0 0 0 20px;
}
.terms-privacy-content li{
    color: #000;
    margin: 0 0 5px;
    list-style: disc;
}
.terms-privacy-content li::marker{
    color: #1c1c1c;
}
.terms-privacy-content a{
    color: #000;
    transition: all .3s ease-in-out;
}
.terms-privacy-content a:hover{
    color: #fbc25a;
}
/*Terms And Privacy Content Section Css End Here*/
@media only screen and (min-width: 768px) and (max-width: 991px) {

/*Terms And Privacy Content Section Responsive Css Start Here*/
.terms-privacy-content span{
    font-size: 16px;
    line-height: 22px;
}
/*Terms And Privacy Content Section Responsive Css End Here*/
}
@media only screen and (min-width: 576px) and (max-width: 767px) {

/*Terms And Privacy Content Section Responsive Css Start Here*/
.terms-privacy-content span{
    font-size: 16px;
    line-height: 22px;
}
/*Terms And Privacy Content Section Responsive Css End Here*/
}
@media only screen and (min-width: 300px) and (max-width: 575px) {

/*Terms And Privacy Content Section Responsive Css Start Here*/
.terms-privacy-content span{
    font-size: 16px;
    line-height: 22px;
}
/*Terms And Privacy Content Section Responsive Css End Here*/
}
</style>

<main>

    <!-- Terms And Privacy Banner Start Here -->
    <section class="terms-conditions-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="terms-banner-content" data-aos="fade-up" data-aos-duration="2000">
                        <h1>Terms & Conditions</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Terms And Privacy Banner End Here -->

    <!-- Terms And Privacy Content Section Start Here -->
    <section class="terms-privacy-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="terms-privacy-content">
                        <h2 class="heading-two">Overview</h2>
                        <p>The use of this website and/or our services constitutes your agreement to the following terms and conditions:If you do not agree with any of these terms and conditions, please do not use this Website or Our services.If you are under legal age of consent for your respective district than you are not allowed to access or use this Website or Our services. You acknowledge and agree that you must be of legal age to purchase any of our products or services available on this Website or otherwise.By submitting an order and/or payment, you are acknowledging that you have read and understood these terms and conditions. You are also agreeing to be legally bound by these terms and conditions, which form the entire agreement between You and penguinpublishers.com/. By submitting an order and/or payment, you are acknowledging that you have read and understood these terms and conditions. You are also agreeing to be legally bound by these terms and conditions, which form the entire agreement between You and <strong>penguinpublishers.com/</strong>.</p>
                        
                        <h3 class="heading-four">Definition Of Terms</h3>
                        <p><strong>"Website"</strong> means all online content on <strong>penguinpublishers.com/</strong> website pages.</p>
                        <p><strong>"Customer," "You," "Yours"</strong> or means and refers to you and or any other person submitting an order to <strong>penguinpublishers.com/</strong> on your behalf.</p>
                        <p><strong>"Company," "We," "Our"</strong> or means and refers to <strong>penguinpublishers.com/</strong>, a company registered under the laws of the State.</p>
                        <p><strong>"Product or Services"</strong> means and refers to all services and products provided by <strong>penguinpublishers.com/</strong> to customer in accordance with his/ her order.</p>
                        <p><strong>"Order"</strong> means an order via phone or e-mail made by customer to purchase services or products provided by <strong>penguinpublishers.com/</strong>. Orders are confirmed by down payments via check, credit card, cash receipt, bank wire transfer, Western Union, or PayPal transfer.</p>

                        <h3 class="heading-four">Our Services</h3>
                        <p>It is important that you carefully read and understand the refund policy in order to have full knowledge of the privileges and limitations governed by the Wikithinkers Policy. It is your obligation to read these Terms and Conditions before submitting any Order and/ or payment to this Website.</p>
                        
                        <h3 class="heading-four">Return</h3>
                        <span>We do not accept any returns on fulfilled orders due to the nature of the products we produce.</span>
                        <p>If changes need to be made to ensure quality standards such as editing and proofreading services are adhered to, alongside requirements being followed, we have a revision process in place that is there to help all customers as their satisfaction is the most important thing to us. If the fulfilled product does not meet the requirements, as specified at the placement of the order, we will begin an extensive internal review and either revise or recreate the content at no additional cost.</p>
                        
                        <h3 class="heading-four">Revisions</h3>
                        <p>Each package has its own revision policy, per the service description of each individual package. We provide revisions within 5 to 10 days of the order going into the Waiting for Customer Approval status in our Order Management Platform. The revision period will depend on the ordered package.</p>
                        <p>Revisions come into play at the end of the order process, once the product has been presented for review and the status has updated to Waiting for Customer Approval. At this time, the customer may request revisions directly by sending their assigned Project Manager an email to ensure that the original provided requirements have been met on the entire product. The customer is always welcome to make changes personally to any content they receive from us after the order has been fulfilled and before publishing as it is delivered in a Word format and they own the rights to it.</p>
                        
                        <h3 class="heading-four">Refund Policy</h3>
                        <p>We handle refunds on a case-by-case basis and do our best to stand behind the customer and take care of their needs. Our team will always work with the customer to resolve any issues to the best of our ability.</p>
                        <p>Circumstances in which a refund may be provided include, but are not limited to, should there be exceptional reason, orders which have not yet been allocated and/or started at the time of the refund request.</p>
                        <p>Refunds, if processed, take between 5 to 15 days to reflect on the customer’s end. A processing fee of USD 250 or 5% of the order amount (whichever is higher) will be charged in all cases. The confirmation of approval for the refund request will be provided by the support team and can only be made through the original payment method used at the placement of the order. You will also receive a notification of refund via the email used at the original time of checkout.</p>
                        <p>We offer refunds only in special cases and specified conditions, detailed as under:</p>
                        
                        <h3 class="heading-four">Change Of Mind:</h3>
                        <ul>
                            <li>Prior to Project Initiation: The customer is entitled to 100% refund before our writers/ editors start working on the project.</li>
                            <li>If (for any reason) you change your mind and decide to discontinue your project with us after placing your order, you can ask for a refund within one hour of placing your order.</li>
                            <li>After Project Progress: All refund claims made after the project has been initiated and at least one round of revision is availed by the Client, we may provide a partial refund (up to 5%) owing to the need to fairly compensate our internal teams.</li>
                        </ul>
                        
                        <h3 class="heading-four">Incompetent Delivery:</h3>
                        <span>Once the work is delivered, customers are only entitled to claim a refund once they have exhausted all the options detailed as under;</span>
                        <ul>
                            <li>If it does not comply with project requirements (as requested/documented by the customer).</li>
                            <li>We are committed to provide our customers with 100% satisfaction and offer unlimited revisions to ensure that the delivery is up to the mark. We assign, re-assign and re-write your work to ensure complete satisfaction. Reserve FREE Pages for future, but of same value and you can avail them at any time. If we're still not able to deliver what you asked for, refund will be processed with a mutual agreement on a set percentage (but only in the cases where the delivery is completely off the mark).</li>
                        </ul>
                        
                        <h3 class="heading-four">Late Delivery:</h3>
                        <p>We believe in "On Time Delivery" but if, for any reason we fail to deliver the asked service on time, after at least three attempts to contact us, your refund will be processed once it is established through documentary evidence that the late delivery was the company's fault.</p>

                        <h3 class="heading-four">Refund Time Frame:</h3>
                        <p>Refunds must be claimed within 10 days of first submission/order delivery subject to no revisions availed. Refunds claimed after the set time frame will not be entertained.</p>
                        <p>All the customers must note the deadline for claiming refund at the time of placing order.</p>

                        <h3 class="heading-four">Cases Where Refund Will Not Be Issued:</h3>
                        <ul>
                            <li>In case of late delivery due to some minor technical errors, such as grammatical, typing, word count, missing references etc., refunds will be processed with mutual agreement and company will only settle with partial refund or discounts reserved for future purchases.</li>
                            <li>Company will not be responsible for any delay from the client's end.</li>
                            <li>No refund will be issued on the basis of low word count.</li>
                        </ul>

                        <h3 class="heading-four">Modifications To The Service & Prices</h3>
                        <p>Prices and discounts for our services are subject to change without notice.</p>
                        <p>We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.</p>
                        <p>We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Terms And Privacy Content Section End Here -->
    
</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>