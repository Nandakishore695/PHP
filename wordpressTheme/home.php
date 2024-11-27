<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
<main>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/Home-A-Slide-03-1.webp"
                    class="d-block w-100" alt="Infra__Building__1">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5 class="display-2 text-uppercase text-start fw-bold"> The Place to Plant <br>Your Future </h5>
                    <p class="text-uppercase text-start"> Get ready for some serious real estate investing success with this Project. </p>
                    <button class="px-5 py-3 btns-primary bg-gold text-start">Explore project</button>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/Slider-New-02.webp"
                    class="d-block w-100" alt="Infra__Building__3">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5 class="display-2 text-uppercase text-start fw-bold"> The Place to Plant <br>Your Future </h5>
                    <p class="text-uppercase text-start"> Get ready for some serious real estate investing success with this Project. </p>
                    <button class="px-5 py-3 btns-primary bg-gold text-start">Explore project</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/Slider-New-New-01.jpg"
                    class="d-block w-100" alt="Infra__Building__2">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5 class="display-2 text-uppercase text-start fw-bold"> The Place to Plant <br>Your Future </h5>
                    <p class="text-uppercase text-start"> Get ready for some serious real estate investing success with this Project. </p>
                    <button class="px-5 py-3 btns-primary bg-gold text-start">Explore project</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>
<section class="container py-5 my-5">
    <div class="row py-5 my-5">
        <div class="col">
            <div id="carouselExample" class="carousel slide ">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Home-A-Slide-03-1.webp"
                            class="d-block" alt="..." width="550">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Slider-New-02.webp"
                            class="d-block " alt="..." width="550">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Slider-New-New-01.jpg"
                            class="d-block " alt="..." width="550">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col text-start pl-5">
            <span class="abut-title text-uppercase">About Us</span>
            <h2 class="display-5 fw-bold text-uppercase">Get ahead of the <br>investment curve!</h2>
            <p>Under the jubilant leadership of Mr. S. Venkat Reddy &
                Mr. AV Reddy , Profound Infra as a group has excelled inexplicably in the aura of Real Estate. Some of
                the endeavors are a massive 5 Lakh sq ft area tech park named as Modern Profound Tech Park in Kondapur,
                Hyderabad, future flag-ship landmark – Township project of 60 acres in Bangalore.</p>
            <button class="px-5 py-3 btns-primary bg-gold"> <b>Who we are</b> </button>
        </div>
    </div>
</section>

<section class="success-bg-img container-fluid text-center my-5 h-100">
    <div class="row">
        <div class="four col-md-4 no-gutters">
            <div class="counter-box colored text-light">
                <i class="fa fa-thumbs-o-up"></i>
                <span class="counter">21</span>
                <p class="fs-2">Projects</p>
            </div>
        </div>
        <div class="four col-md-4 no-gutters text-center">
            <div class="counter-box text-light">
                <i class="fa fa-group"></i>
                <span class="counter">11</span>
                <p class="fs-2">Years</p>
            </div>
        </div>
        <div class="four col-md-4 no-gutters text-center">
            <div class="counter-box text-light">
                <i class="fa  fa-shopping-cart"></i>
                <span class="counter">51</span>
                <p class="fs-2">Clients</p>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid py-5"
    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/Bg-Service-01.webp); background-size: cover;background-repeat: no-repeat;background-position: center;">
    <div class="container text-center">
        <div class="row">
            <div class="col">

                <img src="<?php echo get_template_directory_uri();?>/assets/images/Blogs__Images/Blog-03.webp"
                    alt="Infra__Building__1" width="550">
            </div>
            <div class="col text-start">
                <span class="abut-title text-uppercase">Ongoing Project</span>
                <h2 class="display-5 fw-bold">Profound IT Park</h2>
                <p>Multi storied (21 levels) Commercial Project
                    <br>including Retail, Office and IT Space at Raidurgam,
                    <br>Gachibowli, Opp. Bio-diversity Park Hyderabad,
                    <br>with an accolade of Grade ‘A’ building duly
                    <br>approved
                    by RERA bearing registration No.
                    <br>"P02400001217"
                </p>
                <button class="mt-5 px-5 py-3 btns-primary text-capitalize bg-gold"> <b>view project</b> </button>
            </div>
        </div>
    </div>
    <div class="container text-center py-5 mt-5">
        <h2 class="text-uppercase fw-6 h4 py-3">Profound Infra, the Ultra Premium Grade A Building in <br>the Heart of Gachibowli.</h2>
        <div class="row bg-gold py-5 ">
            <div class="col-sm-6 col-xxl-3 text-light">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/c-icon/Grade-A-Building-01.png" alt="" class="pb-3">
                <p class="fw-bold h4 text-uppercase">Grade A</p>
                <p>Building</p>
            </div>
            <div class="col-sm-6 col-xxl-3 text-light pb-sm-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/c-icon/Sq-Mtrs-01.png" alt="" class="pb-3">
                <p class="fw-bold h4 text-uppercase">1.65M</p>
                <p>sq.ft</p>
            </div>
            <div class="col-sm-6 col-xxl-3 text-light">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/c-icon/Blocks-01.png" alt="" class="pb-3">
                <p class="fw-bold h4 text-uppercase">2-Towers</p>
            </div>
            <div class="col-sm-6 col-xxl-3 text-light">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/c-icon/Area-001.png" alt="" class="pb-3">
                <p class="fw-bold h4 text-uppercase">3</p>
                <p>Acres</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-5">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold text-start ml-5 pl-5">News & Events / Blog</h2>
            </div>
            <div class="col fw-bold text-end mr-5 pr-5">
                <p>See all Latest Updates<span>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/up-right.png" width="10px" class="card-img-top" alt="blogs-page"> -->
                    </span></p>

            </div>
        </div>
        <div class="row my-5">
            <div class="col-xxl-4 py-sm-3">
                <div class="card ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Blogs__Images/Blog-03.webp"
                        class="card-img-top" alt="Grade A buildings">
                    <div class="card-body">
                        <a href="#" class="btn">
                            <h5 class="card-title text-start text-uppercase fs-4 fw-bold"">Grade A buildings</h5>
                                                        <p class=" card-text text-start">Grade A buildings are those
                                that enjoy a
                                premium over the average rent prevailing in the area
                                where they are located because they are usually newly
                                built and have all the requisite infrastructure.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 py-sm-3">
                <div class="card ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Blogs__Images/Blog-02.webp"
                        class="card-img-top" alt="Sustainability Materials Management">
                    <div class="card-body">
                        <a href="#" class="btn">
                            <h5 class="card-title text-start text-uppercase fs-4 fw-bold"">Sustainability Materials Management</h5>
                                                <p class=" card-text text-start">Sustainability material management
                                (SMM) is the systematic approach to using and reusing materials over their entire life
                                cycle.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 py-sm-3">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Blogs__Images/Blog-01.webp"
                        class="card-img-top" alt="Mivan Technology">
                    <div class="card-body">
                        <a href="#" class="btn">
                            <h5 class="card-title text-start text-uppercase fs-4 fw-bold"">Mivan Technology</h5>
                                                <p class=" card-text text-start">Mivan technology has been used widely
                                in Europe, Asia, Gulf Countries, and other parts of the globe.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>