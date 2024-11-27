<?php /* Template Name: Blogs Page */ ?>
<?php $template_url = get_template_directory_uri(); ?>
<?php get_header(); ?>
<h1 class="page-title text-uppercase"><?php the_title(); ?></h1>
<section class="my-5 py-5">
        <div class="container text-center">
                <div class="row">
                        <div class="col-xxl-4">
                                <div class="card m-3" >
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Blogs__Images/Blog-03.webp" class="card-img-top" alt="Grade A buildings">
                                        <div class="card-body">
                                                <a href="#" class="btn">
                                                        <h5 class="card-title text-start text-uppercase fs-4 fw-bold"">Grade A buildings</h5>
                                                        <p class="card-text text-start">Grade A buildings are those that enjoy a
                                                                premium over the average rent prevailing in the area
                                                                where they are located because they are usually newly
                                                                built and have all the requisite infrastructure.</p>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-xxl-4">
                                <div class="card m-3" >
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Blogs__Images/Blog-02.webp" class="card-img-top" alt="Sustainability Materials Management">
                                        <div class="card-body">
                                        <a href="#" class="btn"><h5 class="card-title text-start text-uppercase fs-4 fw-bold"">Sustainability Materials Management</h5>
                                                <p class="card-text text-start">Sustainability material management (SMM) is the systematic approach to using and reusing materials over their entire life cycle.</p>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-xxl-4">
                                <div class="card m-3" >
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Blogs__Images/Blog-01.webp" class="card-img-top" alt="Mivan Technology">
                                        <div class="card-body">
                                        <a href="#" class="btn"><h5 class="card-title text-start text-uppercase fs-4 fw-bold"">Mivan Technology</h5>
                                                <p class="card-text text-start">Mivan technology has been used widely in Europe, Asia, Gulf Countries, and other parts of the globe.</p>
                                                </a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<?php get_footer(); ?>