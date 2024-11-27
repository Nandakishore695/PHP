<?php /* Template Name: Careers Page */ ?>
<?php get_header(); ?>
<h1 class="page-title text-uppercase"><?php the_title(); ?></h1>
<section class="container py-5 my-5 ">
    <div>
        <h1 class="text-uppercase display-2 text-center fw-bold">We Are Hiring!</h1>
    </div>
    <div class="text-center py-3">
        <p>At Profound Infra, we are always looking for talented and motivated individuals to join our team. We offer a
            wide range of career opportunities in various departments, such as sales, marketing and customer service.We
            are looking for candidates who are passionate about their work, eager to learn, and ready to make a
            difference. If you are looking for a challenging and rewarding career, we encourage you to check and submit
            your application for one of our open positions.</p>
    </div>
    <div style="background-color:#f5f5f5;" class="p-xxl-5">
        <form action="<?php echo get_template_directory_uri(); ?>/mail-template/send_email_careers.php" method="get" class="p-5">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Full Name :</label>
                <div class="col-sm-9 col-xxl-8">
                    <input type="text" class="form-control" name="careersFullName">
                </div >
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Position being applied for :</label>
                <div class="col-sm-9 col-xxl-8">
                    <select name="careersPositionBeingAppliedFor" class="form-control" placeholder="Please Select">
                        <option  selected disabled>Please Select</option>
                        <option value="sales">Sales</option>
                        <option value="telecaller">Telecaller</option>
                        <option value="crm">CRM (Customer Relationship Management)</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Qualifications :</label>
                <div class="col-sm-9 col-xxl-8">
                    <input type="text" class="form-control" name="careersQualifications">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Work Experience (if applicable) :</label>
                <div class="col-sm-9 col-xxl-8">
                    <input type="text" class="form-control" name="careersWorkExperience">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Phone Number :</label>
                <div class="col-sm-9 col-xxl-8">
                    <input type="number" class="form-control" name="careersPhoneNumber">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Email Address :</label>
                <div class="col-sm-9 col-xxl-8">
                    <input type="email" class="form-control" name="careersEmailAddress">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Upload Resume [Choose file] :</label>
                <div class="col-sm-9 col-xxl-8">
                    <input class="form-control" type="file" name="careersResume">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 col-xxl-8">
                    <button class="btn btn-dark p-3 px-5 my-3 btn-form h3" type="submit" value="Submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php get_footer(); ?>