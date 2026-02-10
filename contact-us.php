<?php include "header.php"; ?>
<section class="inner-baner">
    <div class="inner-baner-wrap">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <span><a href="<?php echo $base_url; ?>">Home</a> • <a href="<?php echo $base_url; ?>contact-us.php">Contact-us</a></span>
        </div>
    </div>
</section>
<section class="get-in-touch">
    <div class="get-in-touch-wrapper text-center">
        <h2 class="pb-4">Get in Touch</h2>
        <div class="get-in-touch-flex d-flex">
            <img src="images\loc-icon.png" alt="loc-icon">
            <p>New No. 16/1, MIG 120 Flats Vaigai Colony 1st Cross Street, 12th Avenue, Ashok Nagar, Chennai, Tamil Nadu
                600083</p>
        </div>
        <div class="get-in-touch-flex d-flex">
            <img src="images\web-icon.png" alt="web-icon">
            <p>shanthisyoga@gmail.com</p>
        </div>
        <div class="get-in-touch-flex d-flex">
            <img src="images\phone-icon.png" alt="phone-icon">
            <p>+91 97 899 10714</p>
        </div>
    </div>
</section>
<sectiom class="map-sec">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.279050631834!2d80.2099213!3d13.0312294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526776535afcbf%3A0xa00af96dff319392!2sBlissful%20Yogashala!5e0!3m2!1sen!2sin!4v1718647789578!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</sectiom>
<section class="contact-page-form">
    <div class="container">
        <div class="contact-page-form-title text-center">
            <h2>Contact Form</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate eu fugiat nulla pariatur.</p>
            <div class="form-wrapper mt-5">
                <form action="">
                    <div class="row">
                        <div class="col-md-6 ps-0">
                            <input type="text" id="name" name="name" placeholder="First Name">
                        </div>
                        <div class="col-md-6 ps-0">
                            <input type="text" id="name" name="name" placeholder="Last Name">
                        </div>
                        <div class="col-md-6 ps-0">
                            <input type="text" id="phone" maxlength="10"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="phone"
                                placeholder="Phone Number">
                        </div>
                        <div class="col-md-6 ps-0">
                            <input type="mail" id="gmail" name="mail" placeholder="Enter Email">
                        </div>
                        <textarea id="message" name="message" class="textarea2" placeholder="Message"></textarea>
                        <div class="send-message-btn-wrap">
                            <a href="" class="button-1 mx-auto">Send Message <img src="images\Arrow 1.png"
                                    alt="buttn-arrow"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>