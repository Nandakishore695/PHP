<?php /* Template Name: Contact Us Page */ ?>
<?php get_header(); ?>
<div>
    <h1 class="page-title text-uppercase"><?php the_title(); ?></h1>
</div>
<div class="container text-center">
    <div class="row my-5 py-5">
        <div class=" col-xxl-4 bg-dark py-3">
            <form action="<?php echo get_template_directory_uri();?>/mail-template/send_email.php" method="get">
                <h2 class="text-light py-3 text-uppercase">Enquire</h2>
                <div class="my-3 px-2">
                    <input type="text" class="form-control"  placeholder="Your Name*" name="userName">
                </div>
                <div class="my-3 px-2">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address*" name="userEmail">
                </div>
                <div class="my-3 px-2">
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number*" name="userPhoneNumber" >
                </div>
                <div class="my-3 px-2">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Message*" name="userMessage"></textarea>
                </div>
                <div class="my-3 text-start text-light px-2">
                    <p><b>Disclaimer:</b>I authorize Profound Infra and it's representatives to call, SMS, Email or
                        WhatsApp me about it's products and offers. This consent overrides any registration for
                        DND/NDNC.</p>
                </div>
                <div class="mb-3">
                    <input class="btn btn-light p-3 px-5 my-3 btn-form h3" type="submit" value="Submit">
                </div>
            </form>
        </div>
        <div class="col-sm-6 col-xxl-4 text-start ml-3 mt-sm-3">
            <h2 class="text-dark text-uppercase">Corporate Office</h2>
            <P>
                <b>Modern Profound Tech Park</b>
                <br>Survey No.12,
                <br>Opp:Ramalayam Temple,
                <br>Whitefields Road, 
                <br>Kothaguda, Hyderabad – 500084
                <br><b><a href="tel:+918743015555" class="text-dark"> PH:</b> +91 8743015555</a>,
                <br><a href="tel:+918121011363" class="text-dark">+91 8121011363</a>
                <br><b><a href="mailto:info@profoundgroup.in" class="text-dark">Email:</b> info@profoundgroup.in</a>
            </p>
        </div>
        <div class="col-sm-6 col-xxl-4 text-start">
            <h2 class="text-dark text-uppercase">Site Office</h2>
            <P>
            <b>Profound IT Park</b>
            <br>Survey No. 66/2, 7-1-66/2/A,
            <br>Panmakth Village,
            <br>Serilingampally, (Opp: Bio-Diversity 
            <br>Park & Beside NCB Bhavan), 
            <br>Hyderabad, Telangana – 500019
                <ul class="list-unstyled">
                    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri();?>/assets/icon/facebook-icon.svg" alt="Facebook__Icon"></li>
                    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri();?>/assets/icon/instagram-icon.svg" alt="Instagram__Icon"></li>
                    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri();?>/assets/icon/linkedin-icon.svg" alt="Linkedin__Icon"></li>
                    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri();?>/assets/icon/twitter-icon.svg" alt="Twitter__Icon"></li>
                </ul>
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>