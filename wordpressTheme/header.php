<?php $template_url = get_template_directory_uri(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profound Infra - Home</title>
    <link rel="stylesheet" href="<?php echo $template_url; ?>/assets/bootsstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $template_url; ?>/assets/custom.css">
    <meta name="description" content="This is demo website for practice">
    <script src="<?php echo $template_url; ?>/assets/bootsstrap5/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="container-fluid bg-dark py-3 text-center sticky-top">
        <nav class="row align-items-center">
            <div class="col-6">
                <a href="/wordpress"> <img src="<?php echo $template_url; ?>/assets/images/ProfoundInfra-Main-logo.png"
                        alt="profoundInfra-Main-logo"></a>
            </div>
            <ul class="col-6 list-inline list-unstyled text-uppercase fw-bold text-start">
                <li class="list-inline-item mx-3 link-underline link-offset-3-hover "><a href="/wordpress">Home</a></li>
                <li class="list-inline-item mx-3"><a href="about-us">About Us</a></li>
                <li class="list-inline-item mx-3">
                    <a href="projects">Projects</a>
                    <ul class="dropdown-menu">
                        <li><a href="">completed project</a></li>
                        <li><a href="">ongoing project</a></li>
                    </ul>
                </li>
                <li class="list-inline-item mx-3"><a href="careers">Careers</a></li>
                <li class="list-inline-item mx-3"><a href="blogs">Blogs</a></li>
                <li class="list-inline-item mx-3"><a href="contact-us">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <section class="social-media">
    <ul class="list-unstyled">
            <li><img src="<?php echo get_template_directory_uri();?>/assets/icon/whatsapp-icon.svg" alt="Whatsapp__con">
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/assets/icon/facebook-icon.svg" alt="Facebook__Icon">
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/assets/icon/instagram-icon.svg" alt="Instagram__Icon">
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/assets/icon/linkedin-icon.svg" alt="Linkedin__Icon">
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/assets/icon/twitter-icon.svg" alt="Twitter__Icon">
            </li>
        </ul>
    </section>
    